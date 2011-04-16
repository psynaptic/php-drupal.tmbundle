/**
 * Implements hook_prepare().
 */
function <?php print $basename; ?>_prepare(&\$node) {
  ${1:if (\$file = file_check_upload(\$field_name)) {
    \$file = file_save_upload(\$field_name, _image_filename(\$file->filename, NULL, TRUE));
    if (\$file) {
      if (!image_get_info(\$file->filepath)) {
        form_set_error(\$field_name, t('Uploaded file is not a valid image'));
        return;
      \}
    \}
    else {
      return;
    \}
    \$node->images['_original'] = \$file->filepath;
    _image_build_derivatives(\$node, true);
    \$node->new_file = TRUE;
  \}}
}

$2