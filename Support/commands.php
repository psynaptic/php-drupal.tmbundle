<?php

include_once 'bootstrap.php';

function textmate_execute_command($name) {
  global $version;

  if ((!isset($_ENV['TM_DRUPAL_VERSION']) || !isset($_ENV['TM_DRUPAL_API'])) && (!isset($_SERVER['TM_DRUPAL_VERSION']) || !isset($_SERVER['TM_DRUPAL_API']))) {
    return $_SERVER['TM_BUNDLE_SUPPORT'] . "/commands/misc/not_installed_properly.php";
  }
  
  if ('template_preprocess_node' == $name) {
    $folder = 'preproces/';
  }
  
  $files = array(    
    $_SERVER['TM_BUNDLE_SUPPORT'] . "/commands/$folder$name.$version.php",
    $_SERVER['TM_BUNDLE_SUPPORT'] . "/commands/$folder$name.php",
    $_SERVER['TM_BUNDLE_SUPPORT'] . "/commands/misc/does_not_exist.php",
  );

  $theme_name = textmate_detect_drupal_theme();
  foreach ($files as $file) {
    if (file_exists($file)) {
      return $file;
    }
  }
}

function textmate_detect_drupal_theme() {
  if (isset($_server['TM_DIRECTORY'])) {
    // Try to find the .info file of the theme.
    $path = explode('/', $_SERVER['TM_DIRECTORY']);
    while (!empty($path) && empty($info_file)) {
      $info_file = textmate_scan_directory($_SERVER['TM_DIRECTORY'], '/\.info$/', array('recurse' => FALSE));
    }
    return basename($info_file);
  }
}