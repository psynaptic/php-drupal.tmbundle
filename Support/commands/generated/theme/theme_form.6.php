/**
 * Implements theme_form().
 */
function <?php print $basename; ?>_form(\$element) {
  ${1:// Anonymous div to satisfy XHTML compliance.
  \$action = \$element['#action'] ? 'action="'. check_url(\$element['#action']) .'" ' : '';
  return '<form '. \$action .' accept-charset="UTF-8" method="'. \$element['#method'] .'" id="'. \$element['#id'] .'"'. drupal_attributes(\$element['#attributes']) .">\n<div>". \$element['#children'] ."\n</div></form>\n";}
}

$2