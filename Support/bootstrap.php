<?php

$version = textmate_detect_drupal_version();
$basename = textmate_detect_basename($_SERVER['TM_FILEPATH']);

//============================================================================

function textmate_detect_basename($filepath) {
  $nomask = array('.', '..', 'CVS');
  $path = explode('/', dirname($filepath));
  
  while($path) {
    if ($info = textmate_scan_directory(implode('/', $path), "/.*\.info$/", $nomask, 0, FALSE)) {
      $info = array_shift($info);
      return $info->name;
    }
    
    array_pop($path);
  }
  
  return 'hook';
}

function textmate_find_command($name) {
  global $version;

  if ((!isset($_ENV['TM_DRUPAL_VERSION']) || !isset($_ENV['TM_DRUPAL_API'])) && (!isset($_SERVER['TM_DRUPAL_VERSION']) || !isset($_SERVER['TM_DRUPAL_API']))) {
    return $_SERVER['TM_BUNDLE_SUPPORT'] . '/misc/not_installed_properly.php';
  }

  if (strpos($name, 'theme_') === 0) {
    $folder = 'theme/';
  }

  elseif (strpos($name, 'hook_') === 0) {
    $folder = 'hooks/';
  }

  elseif (strpos($name, 'drupal_') === 0) {
    $folder = 'drupal/';
  }

  elseif (strpos($name, 'content_') === 0) {
    $folder = 'cck/';
  }

  elseif (strpos($name, 'menu_') === 0) {
    $folder = 'menu/';
  }

  elseif (strpos($name, 'template_preprocess_') === 0) {
    $folder = 'preprocess/';
  }

  elseif (strpos($name, 'schema_') === 0) {
    $folder = 'schema/';
    $name = str_replace('schema_', '', $name);
  }

  elseif (strpos($name, 'test_') === 0) {
    $folder = 'simpletest/';
  }

  elseif (strpos($name, 'element_') === 0) {
    $folder = 'fapi/elements/';
    $name = str_replace('element_', '', $name);
  }

  elseif (strpos($name, 'fapi_') === 0) {
    $folder = 'fapi/controls/';
    $name = str_replace('fapi_', '', $name);
  }

  else {
    $folder = '';
  }

  $files = array(
    $_SERVER['TM_BUNDLE_SUPPORT'] . '/commands/custom/' . $folder . $name . '.' . $version . '.php',
    $_SERVER['TM_BUNDLE_SUPPORT'] . '/commands/generated/' . $folder . $name . '.' . $version . '.php',
    $_SERVER['TM_BUNDLE_SUPPORT'] . '/commands/custom/' . $folder . $name . '.php',
    $_SERVER['TM_BUNDLE_SUPPORT'] . '/commands/generated/' . $folder . $name . '.php',
    $_SERVER['TM_BUNDLE_SUPPORT'] . '/misc/does_not_exist.php',
  );

  foreach ($files as $file)
    if (file_exists($file))
      return $file;
}

function textmate_detect_drupal_version() {
  if (isset($_SERVER['TM_DIRECTORY'])) {
    // Check .info file in the current directory.
    $info_files = textmate_scan_directory($_SERVER['TM_DIRECTORY'], '/\.info$/', array('recurse' => FALSE));
    if (!empty($info_files) && $info = textmate_parse_info_file(key($info_files))) {
      if (!empty($info['core']))
        return (int)$info['core'];
    }

    // Loop upwards until we find a Drupal installation.
    $path = explode('/', $_SERVER['TM_DIRECTORY']);
    while (!empty($path)) {
      $system_module = implode('/', $path) . '/modules/system/system.module';
      if (file_exists($system_module)) {
        include $system_module;
        return (int)VERSION;
      }
      array_pop($path);
    }
  }
  if (empty($_ENV['TM_DRUPAL_VERSION'])) {
    return $_SERVER['TM_DRUPAL_VERSION'];
  }
  return $_ENV['TM_DRUPAL_VERSION'];
}

function textmate_parse_info_file($filename) {
  $info = array();

  if (!file_exists($filename)) {
    return $info;
  }

  $data = file_get_contents($filename);
  if (preg_match_all('
    @^\s*                           # Start at the beginning of a line, ignoring leading whitespace
    ((?:
      [^=;\[\]]|                    # Key names cannot contain equal signs, semi-colons or square brackets,
      \[[^\[\]]*\]                  # unless they are balanced and not nested
    )+?)
    \s*=\s*                         # Key/value pairs are separated by equal signs (ignoring white-space)
    (?:
      ("(?:[^"]|(?<=\\\\)")*")|     # Double-quoted string, which may contain slash-escaped quotes/slashes
      (\'(?:[^\']|(?<=\\\\)\')*\')| # Single-quoted string, which may contain slash-escaped quotes/slashes
      ([^\r\n]*?)                   # Non-quoted string
    )\s*$                           # Stop at the next end of a line, ignoring trailing whitespace
    @msx', $data, $matches, PREG_SET_ORDER)) {
    foreach ($matches as $match) {
      // Fetch the key and value string
      $i = 0;
      foreach (array('key', 'value1', 'value2', 'value3') as $var) {
        $$var = isset($match[++$i]) ? $match[$i] : '';
      }
      $value = stripslashes(substr($value1, 1, -1)) . stripslashes(substr($value2, 1, -1)) . $value3;

      // Parse array syntax
      $keys = preg_split('/\]?\[/', rtrim($key, ']'));
      $last = array_pop($keys);
      $parent = &$info;

      // Create nested arrays
      foreach ($keys as $key) {
        if ($key == '') {
          $key = count($parent);
        }
        if (!isset($parent[$key]) || !is_array($parent[$key])) {
          $parent[$key] = array();
        }
        $parent = &$parent[$key];
      }

      // Handle PHP constants
      if (defined($value)) {
        $value = constant($value);
      }

      // Insert actual value
      if ($last == '') {
        $last = count($parent);
      }
      $parent[$last] = $value;
    }
  }

  return $info;
}

function textmate_scan_directory($dir, $mask, $nomask = array('.', '..', 'CVS'), $callback = 0, $recurse_max_depth = TRUE, $key = 'filename', $min_depth = 0, $include_dot_files = FALSE, $depth = 0) {
  $key = (in_array($key, array('filename', 'basename', 'name')) ? $key : 'filename');
  $files = array();

  if (is_dir($dir) && $handle = opendir($dir)) {
    while (FALSE !== ($file = readdir($handle))) {
      if (!in_array($file, $nomask) && (($include_dot_files && (!preg_match("/\.\+/",$file))) || ($file[0] != '.'))) {
        if (is_dir("$dir/$file") && (($recurse_max_depth === TRUE) || ($depth < $recurse_max_depth))) {
          // Give priority to files in this folder by merging them in after any subdirectory files.
          $files = array_merge(textmate_scan_directory("$dir/$file", $mask, $nomask, $callback, $recurse_max_depth, $key, $min_depth, $include_dot_files, $depth + 1), $files);
        }
        elseif ($depth >= $min_depth && preg_match($mask, $file)) {
          // Always use this match over anything already set in $files with the same $$key.
          $filename = "$dir/$file";
          $basename = basename($file);
          $name = substr($basename, 0, strrpos($basename, '.'));
          $files[$$key] = new stdClass();
          $files[$$key]->filename = $filename;
          $files[$$key]->basename = $basename;
          $files[$$key]->name = $name;
          if ($callback) {
            $callback($filename);
          }
        }
      }
    }

    closedir($handle);
  }

  return $files;
}

function textmate_docs_for_word($function) {
  $settings = textmate_detect_settings($_SERVER['TM_FILEPATH']);
  $basename = $settings['basename']['value'];
  $version = $settings['version']['value'];

  if (strpos($_ENV['TM_DRUPAL_API'], 'drupalcontrib.org') !== FALSE) {  
    $suggestions = array();
    $suggestions[] = preg_replace('/\A' . $basename .'_/', 'hook_', $function, 1);
    $suggestions[] = preg_replace('/\A' . $basename .'_/', 'theme_', $function, 1);
    $suggestions[] = preg_replace('/\A' . $basename .'_/', 'template_', $function, 1);
    $suggestions[] = $function;
  
    $suggestions = array_unique($suggestions);
    return $_ENV['TM_DRUPAL_API'] . '/textmate_api/search/' . $version . '/' . implode('/', $suggestions);    
  }
  
  return $_ENV['TM_DRUPAL_API'] . '/api/search/' . $version . '/' . $function;    
}
