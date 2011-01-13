/**
 * Implements hook_filter_info_alter().
 */
function <?php print $basename; ?>_filter_info_alter(&\$info) {
  ${1:// Replace the PHP evaluator process callback with an improved
  // PHP evaluator provided by a module.
  \$info['php_code']['process callback'] = 'my_module_php_evaluator';

  // Alter the default settings of the URL filter provided by core.
  \$info['filter_url']['default settings'] = array(
    'filter_url_length' => 100,
  );}
}

$2