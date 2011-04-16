/**
 * Implements theme_item().
 */
function <?php print $basename; ?>_item(\$element) {
  ${1:return theme('form_element', \$element, \$element['#value'] . (!empty(\$element['#children']) ? \$element['#children'] : ''));}
}

$2