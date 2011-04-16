/**
 * Implements theme_markup().
 */
function <?php print $basename; ?>_markup(\$element) {
  ${1:return (isset(\$element['#value']) ? \$element['#value'] : '') . (isset(\$element['#children']) ? \$element['#children'] : '');}
}

$2