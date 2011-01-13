/**
 * Implements hook_modules_uninstalled().
 */
function <?php print $basename; ?>_modules_uninstalled(\$modules) {
  ${1:foreach (\$modules as \$module) {
    db_delete('mymodule_table')
      ->condition('module', \$module)
      ->execute();
  \}
  mymodule_cache_rebuild();}
}

$2