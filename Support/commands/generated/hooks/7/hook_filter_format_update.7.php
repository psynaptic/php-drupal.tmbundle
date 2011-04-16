/**
 * Implements hook_filter_format_update().
 */
function <?php print $basename; ?>_filter_format_update(\$format) {
  ${1:mymodule_cache_rebuild();}
}

$2