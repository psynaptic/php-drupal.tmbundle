/**
 * Implements hook_overlay_child_initialize().
 */
function <?php print $basename; ?>_overlay_child_initialize() {
  ${1:// Add our custom JavaScript.
  drupal_add_js(drupal_get_path('module', 'hook') . '/hook-overlay-child.js');}
}

$2