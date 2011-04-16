/**
 * Implements hook_file_presave().
 */
function <?php print $basename; ?>_file_presave(\$file) {
  ${1:// Change the file timestamp to an hour prior.
  \$file->timestamp -= 3600;}
}

$2