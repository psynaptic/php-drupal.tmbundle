/**
 * Implements hook_overlay_parent_initialize().
 */
function <?php print $basename; ?>_overlay_parent_initialize() {
  ${1:// Add our custom JavaScript.
  drupal_add_js(drupal_get_path('module', 'hook') . '/hook-overlay.js');}
}

$2