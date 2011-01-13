/**
 * Implements hook_registry_files_alter().
 */
function <?php print $basename; ?>_registry_files_alter(&\$files, \$modules) {
  ${1:foreach (\$modules as \$module) {
    // Only add test files for disabled modules, as enabled modules should
    // already include any test files they provide.
    if (!\$module->status) {
      \$dir = \$module->dir;
      foreach (\$module->info['files'] as \$file) {
        if (substr(\$file, -5) == '.test') {
          \$files["\$dir/\$file"] = array('module' => \$module->name, 'weight' => \$module->weight);
        \}
      \}
    \}
  \}}
}

$2