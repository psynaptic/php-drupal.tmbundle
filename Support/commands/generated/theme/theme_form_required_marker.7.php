/**
 * Implements theme_form_required_marker().
 */
function <?php print $basename; ?>_form_required_marker(\$variables) {
  ${1:// This is also used in the installer, pre-database setup.
  \$t = get_t();
  \$attributes = array(
    'class' => 'form-required',
    'title' => \$t('This field is required.'),
  );
  return '<span' . drupal_attributes(\$attributes) . '>*</span>';}
}

$2