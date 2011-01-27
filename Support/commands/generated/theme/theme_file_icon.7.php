/**
 * Implements theme_file_icon().
 */
function <?php print $basename; ?>_file_icon(\$variables) {
  ${1:\$file = \$variables['file'];
  \$icon_directory = \$variables['icon_directory'];

  \$mime = check_plain(\$file->filemime);
  \$icon_url = file_icon_url(\$file, \$icon_directory);
  return '<img class="file-icon" alt="" title="' . \$mime . '" src="' . \$icon_url . '" />';}
}

$2