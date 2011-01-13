/**
 * Implements hook_xmlrpc_alter().
 */
function <?php print $basename; ?>_xmlrpc_alter(&\$methods) {
  ${1:// Directly change a simple method.
  \$methods['drupal.login'] = 'mymodule_login';

  // Alter complex definitions.
  foreach (\$methods as \$key => &\$method) {
    // Skip simple method definitions.
    if (!is_int(\$key)) {
      continue;
    \}
    // Perform the wanted manipulation.
    if (\$method[0] == 'drupal.site.ping') {
      \$method[1] = 'mymodule_directory_ping';
    \}
  \}}
}

$2