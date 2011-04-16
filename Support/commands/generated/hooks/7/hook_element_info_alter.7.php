/**
 * Implements hook_element_info_alter().
 */
function <?php print $basename; ?>_element_info_alter(&\$type) {
  ${1:// Decrease the default size of textfields.
  if (isset(\$type['textfield']['#size'])) {
    \$type['textfield']['#size'] = 40;
  \}}
}

$2