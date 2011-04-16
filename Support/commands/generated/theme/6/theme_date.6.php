/**
 * Implements theme_date().
 */
function <?php print $basename; ?>_date(\$element) {
  ${1:return theme('form_element', \$element, '<div class="container-inline">'. \$element['#children'] .'</div>');}
}

$2