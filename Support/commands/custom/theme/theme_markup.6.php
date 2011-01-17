/**
 * Format HTML markup for use in forms.
 *
 * This is used in more advanced forms, such as theme selection and filter format.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: value, children.
 * @return
 *   A themed HTML string representing the HTML markup.
 *
 * @ingroup themeable
 */

function <?php print $basename; ?>_markup(\$element) {
  return (isset(\$element['#value']) ? \$element['#value'] : '') . (isset(\$element['#children']) ? \$element['#children'] : '');
}

$1