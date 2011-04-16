/**
 * Implements theme_rdf_metadata().
 */
function <?php print $basename; ?>_rdf_metadata(\$variables) {
  ${1:\$output = '';
  foreach (\$variables['metadata'] as \$attributes) {
    // Add a class so that developers viewing the HTML source can see why there
    // are empty <span> tags in the document. The class can also be used to set
    // a CSS display:none rule in a theme where empty spans affect display.
    \$attributes['class'][] = 'rdf-meta';
    // The XHTML+RDFa doctype allows either <span></span> or <span /> syntax to
    // be used, but for maximum browser compatibility, W3C recommends the
    // former when serving pages using the text/html media type, see
    // http://www.w3.org/TR/xhtml1/#C_3.
    \$output .= '<span' . drupal_attributes(\$attributes) . '></span>';
  \}
  return \$output;}
}

$2