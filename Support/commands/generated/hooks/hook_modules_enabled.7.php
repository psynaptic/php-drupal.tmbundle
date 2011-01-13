/**
 * Implements hook_modules_enabled().
 */
function <?php print $basename; ?>_modules_enabled(\$modules) {
  ${1:if (in_array('lousy_module', \$modules)) {
    drupal_set_message(t('mymodule is not compatible with lousy_module'), 'error');
    mymodule_disable_functionality();
  \}}
}

$2