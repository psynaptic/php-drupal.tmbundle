/**
 * Implements hook_disable().
 */
function <?php print $basename; ?>_disable() {
  ${1:mymodule_cache_rebuild();}
}

$2