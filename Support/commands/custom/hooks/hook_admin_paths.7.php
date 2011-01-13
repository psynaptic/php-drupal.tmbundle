/**
 * Implements hook_admin_paths().
 */
function <?php print $basename; ?>_admin_paths() {
  ${1:\$paths = array(
    'mymodule/*/add' => TRUE,
    'mymodule/*/edit' => TRUE,
  );
  return \$paths;}
}

$2