/**
 * Implements hook_file_download().
 */
function <?php print $basename; ?>_file_download(\$uri) {
  ${1:// Check if the file is controlled by the current module.
  if (!file_prepare_directory(\$uri)) {
    \$uri = FALSE;
  \}
  \$result = db_query("SELECT f.* FROM {file_managed\} f INNER JOIN {upload\} u ON f.fid = u.fid WHERE uri = :uri", array('uri' => \$uri));
  foreach (\$result as \$file) {
    if (!user_access('view uploaded files')) {
      return -1;
    \}
    return array(
      'Content-Type' => \$file->filemime,
      'Content-Length' => \$file->filesize,
    );
  \}}
}

$2