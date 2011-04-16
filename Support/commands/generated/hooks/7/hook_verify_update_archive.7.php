/**
 * Implements hook_verify_update_archive().
 */
function <?php print $basename; ?>_verify_update_archive(\$project, \$archive_file, \$directory) {
  ${1:\$errors = array();
  if (!file_exists(\$directory)) {
    \$errors[] = t('The %directory does not exist.', array('%directory' => \$directory));
  \}
  // Add other checks on the archive integrity here.
  return \$errors;}
}

$2