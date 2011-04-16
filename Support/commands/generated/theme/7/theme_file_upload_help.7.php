/**
 * Implements theme_file_upload_help().
 */
function <?php print $basename; ?>_file_upload_help(\$variables) {
  ${1:\$description = \$variables['description'];
  \$upload_validators = \$variables['upload_validators'];

  \$descriptions = array();

  if (strlen(\$description)) {
    \$descriptions[] = \$description;
  \}
  if (isset(\$upload_validators['file_validate_size'])) {
    \$descriptions[] = t('Files must be less than !size.', array('!size' => '<strong>' . format_size(\$upload_validators['file_validate_size'][0]) . '</strong>'));
  \}
  if (isset(\$upload_validators['file_validate_extensions'])) {
    \$descriptions[] = t('Allowed file types: !extensions.', array('!extensions' => '<strong>' . check_plain(\$upload_validators['file_validate_extensions'][0]) . '</strong>'));
  \}
  if (isset(\$upload_validators['file_validate_image_resolution'])) {
    \$max = \$upload_validators['file_validate_image_resolution'][0];
    \$min = \$upload_validators['file_validate_image_resolution'][1];
    if (\$min && \$max && \$min == \$max) {
      \$descriptions[] = t('Images must be exactly !size pixels.', array('!size' => '<strong>' . \$max . '</strong>'));
    \}
    elseif (\$min && \$max) {
      \$descriptions[] = t('Images must be between !min and !max pixels.', array('!min' => '<strong>' . \$min . '</strong>', '!max' => '<strong>' . \$max . '</strong>'));
    \}
    elseif (\$min) {
      \$descriptions[] = t('Images must be larger than !min pixels.', array('!min' => '<strong>' . \$min . '</strong>'));
    \}
    elseif (\$max) {
      \$descriptions[] = t('Images must be smaller than !max pixels.', array('!max' => '<strong>' . \$max . '</strong>'));
    \}
  \}

  return implode('<br />', \$descriptions);}
}

$2