/**
 * Implements hook_user_presave().
 */
function <?php print $basename; ?>_user_presave(&\$edit, \$account, \$category) {
  ${1:// Make sure that our form value 'mymodule_foo' is stored as 'mymodule_bar'.
  if (isset(\$edit['mymodule_foo'])) {
    \$edit['data']['my_module_foo'] = \$edit['my_module_foo'];
  \}}
}

$2