/**
 * Implements hook_admin_paths().
 */
function <?php print $basename; ?>_admin_paths() {
  ${1:\$paths = array(
    '<?php print $basename; ?>/*/add' => TRUE, 
    '<?php print $basename; ?>/*/edit' => TRUE,
  );
  return \$paths;}
}

$2