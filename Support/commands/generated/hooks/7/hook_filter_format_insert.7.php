/**
 * Implements hook_filter_format_insert().
 */
function <?php print $basename; ?>_filter_format_insert(\$format) {
  ${1:mymodule_cache_rebuild();}
}

$2