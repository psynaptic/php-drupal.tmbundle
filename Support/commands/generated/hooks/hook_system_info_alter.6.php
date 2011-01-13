/**
 * Implements hook_system_info_alter().
 */
function <?php print $basename; ?>_system_info_alter(&\$info, \$file) {
  ${1:// Only fill this in if the .info file does not define a 'datestamp'.
  if (empty(\$info['datestamp'])) {
    \$info['datestamp'] = filemtime(\$file->filename);
  \}}
}

$2