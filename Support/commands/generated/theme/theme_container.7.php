/**
 * Implements theme_container().
 */
function <?php print $basename; ?>_container(\$variables) {
  ${1:\$element = \$variables['element'];

  // Special handling for form elements.
  if (isset(\$element['#array_parents'])) {
    // Assign an html ID.
    if (!isset(\$element['#attributes']['id'])) {
      \$element['#attributes']['id'] = \$element['#id'];
    \}
    // Add the 'form-wrapper' class.
    \$element['#attributes']['class'][] = 'form-wrapper';
  \}

  return '<div' . drupal_attributes(\$element['#attributes']) . '>' . \$element['#children'] . '</div>';}
}

$2