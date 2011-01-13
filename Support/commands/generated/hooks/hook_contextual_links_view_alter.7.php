/**
 * Implements hook_contextual_links_view_alter().
 */
function <?php print $basename; ?>_contextual_links_view_alter(&\$element, \$items) {
  ${1:// Add another class to all contextual link lists to facilitate custom
  // styling.
  \$element['#attributes']['class'][] = 'custom-class';}
}

$2