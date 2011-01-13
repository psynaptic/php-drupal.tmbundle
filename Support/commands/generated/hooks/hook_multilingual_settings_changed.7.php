/**
 * Implements hook_multilingual_settings_changed().
 */
function <?php print $basename; ?>_multilingual_settings_changed() {
  ${1:field_info_cache_clear();}
}

$2