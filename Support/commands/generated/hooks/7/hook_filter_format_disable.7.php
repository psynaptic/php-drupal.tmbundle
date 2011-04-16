/**
 * Implements hook_filter_format_disable().
 */
function <?php print $basename; ?>_filter_format_disable(\$format) {
  ${1:mymodule_cache_rebuild();}
}

$2