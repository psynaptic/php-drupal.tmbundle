/**
 * Implements hook_themes_disabled().
 */
function <?php print $basename; ?>_themes_disabled(\$theme_list) {
  ${1:// Clear all update module caches.
  _update_cache_clear();}
}

$2