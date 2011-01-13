/**
 * Implements hook_file_delete().
 */
function <?php print $basename; ?>_file_delete(\$file) {
  ${1:// Delete all information associated with the file.
  db_delete('upload')->condition('fid', \$file->fid)->execute();}
}

$2