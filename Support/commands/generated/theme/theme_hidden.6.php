/**
 * Implements theme_hidden().
 */
function <?php print $basename; ?>_hidden(\$element) {
  ${1:return '<input type="hidden" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" value="'. check_plain(\$element['#value']) ."\" ". drupal_attributes(\$element['#attributes']) ." />\n";}
}

$2