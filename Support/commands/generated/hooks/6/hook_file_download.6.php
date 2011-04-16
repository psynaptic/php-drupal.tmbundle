/**
 * Implements hook_file_download().
 */
function <?php print $basename; ?>_file_download(\$filepath) {
  ${1:// Check if the file is controlled by the current module.
  if (\$filemime = db_result(db_query("SELECT filemime FROM {fileupload\} WHERE filepath = '%s'", file_create_path(\$filepath)))) {
    if (user_access('access content')) {
      return array('Content-type:' . \$filemime);
    \}
    else {
      return -1;
    \}
  \}}
}

$2