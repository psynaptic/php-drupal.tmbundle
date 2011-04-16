/**
 * Implements theme_image_button().
 */
function <?php print $basename; ?>_image_button(\$element) {
  ${1:// Make sure not to overwrite classes.
  if (isset(\$element['#attributes']['class'])) {
    \$element['#attributes']['class'] = 'form-'. \$element['#button_type'] .' '. \$element['#attributes']['class'];
  \}
  else {
    \$element['#attributes']['class'] = 'form-'. \$element['#button_type'];
  \}

  return '<input type="image" name="'. \$element['#name'] .'" '.
    (!empty(\$element['#value']) ? ('value="'. check_plain(\$element['#value']) .'" ') : '') .
    'id="'. \$element['#id'] .'" '.
    drupal_attributes(\$element['#attributes']) .
    ' src="'. base_path() . \$element['#src'] .'" '.
    (!empty(\$element['#title']) ? 'alt="'. check_plain(\$element['#title']) .'" title="'. check_plain(\$element['#title']) .'" ' : '' ) .
    "/>\n";}
}

$2