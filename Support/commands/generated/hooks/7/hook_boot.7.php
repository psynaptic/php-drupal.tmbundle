/**
 * Implements hook_boot().
 */
function <?php print $basename; ?>_boot() {
  ${1:// we need user_access() in the shutdown function. make sure it gets loaded
  drupal_load('module', 'user');
  drupal_register_shutdown_function('devel_shutdown');}
}

$2