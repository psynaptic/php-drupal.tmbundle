/**
 * Implements hook_modules_installed().
 */
function <?php print $basename; ?>_modules_installed(\$modules) {
  ${1:if (in_array('lousy_module', \$modules)) {
    variable_set('lousy_module_conflicting_variable', FALSE);
  \}}
}

$2