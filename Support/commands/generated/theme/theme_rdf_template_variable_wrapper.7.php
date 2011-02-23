/**
 * Implements theme_rdf_template_variable_wrapper().
 */
function <?php print $basename; ?>_rdf_template_variable_wrapper(\$variables) {
  ${1:\$output = \$variables['content'];
  if (!empty(\$output) && !empty(\$variables['attributes'])) {
    \$attributes = drupal_attributes(\$variables['attributes']);
    \$output = \$variables['inline'] ? "<span\$attributes>\$output</span>" : "<div\$attributes>\$output</div>";
  \}
  return \$output;}
}

$2