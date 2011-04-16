/**
 * Implements hook_modules_disabled().
 */
function <?php print $basename; ?>_modules_disabled(\$modules) {
  ${1:if (in_array('lousy_module', \$modules)) {
    mymodule_enable_functionality();
  \}}
}

$2