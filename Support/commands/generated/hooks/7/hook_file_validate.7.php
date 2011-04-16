/**
 * Implements hook_file_validate().
 */
function <?php print $basename; ?>_file_validate(&\$file) {
  ${1:\$errors = array();

  if (empty(\$file->filename)) {
    \$errors[] = t("The file's name is empty. Please give a name to the file.");
  \}
  if (strlen(\$file->filename) > 255) {
    \$errors[] = t("The file's name exceeds the 255 characters limit. Please rename the file and try again.");
  \}

  return \$errors;}
}

$2