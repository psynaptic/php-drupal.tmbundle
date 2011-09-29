/**
 * Implements hook_theme().
 */
function <?php print $basename; ?>_theme(\$existing, \$type, \$theme, \$path) {
  return array(
    '${1:example}' => array(
      'variables' => array('${2:arg0}' => NULL, '${3:arg1}' => NULL),
      'template' => '${4:example}',
    ),
  );
}

$5