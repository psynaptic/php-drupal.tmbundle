/**
 * Implements theme_file_link().
 */
function <?php print $basename; ?>_file_link(\$variables) {
  ${1:\$file = \$variables['file'];
  \$icon_directory = \$variables['icon_directory'];

  \$url = file_create_url(\$file->uri);
  \$icon = theme('file_icon', array('file' => \$file, 'icon_directory' => \$icon_directory));

  // Set options as per anchor format described at
  // http://microformats.org/wiki/file-format-examples
  \$options = array(
    'attributes' => array(
      'type' => \$file->filemime . '; length=' . \$file->filesize,
    ),
  );

  // Use the description as the link text if available.
  if (empty(\$file->description)) {
    \$link_text = \$file->filename;
  \}
  else {
    \$link_text = \$file->description;
    \$options['attributes']['title'] = check_plain(\$file->filename);
  \}

  return '<span class="file">' . \$icon . ' ' . l(\$link_text, \$url, \$options) . '</span>';}
}

$2