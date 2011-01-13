/**
 * Implements hook_admin_paths_alter().
 */
function <?php print $basename; ?>_admin_paths_alter(&\$paths) {
  ${1:// Treat all user pages as administrative.
  \$paths['user'] = TRUE;
  \$paths['user/*'] = TRUE;
  // Treat the forum topic node form as a non-administrative page.
  \$paths['node/add/forum'] = FALSE;}
}

$2