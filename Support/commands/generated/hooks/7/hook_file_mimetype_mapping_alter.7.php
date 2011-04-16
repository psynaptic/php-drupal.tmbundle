/**
 * Implements hook_file_mimetype_mapping_alter().
 */
function <?php print $basename; ?>_file_mimetype_mapping_alter(&\$mapping) {
  ${1:// Add new MIME type 'drupal/info'.
  \$mapping['mimetypes']['example_info'] = 'drupal/info';
  // Add new extension '.info' and map it to the 'drupal/info' MIME type.
  \$mapping['extensions']['info'] = 'example_info';
  // Override existing extension mapping for '.ogg' files.
  \$mapping['extensions']['ogg'] = 189;}
}

$2