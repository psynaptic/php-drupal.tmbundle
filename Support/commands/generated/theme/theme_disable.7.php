/**
 * Implements theme_disable().
 */
function <?php print $basename; ?>_disable(\$theme_list) {
  ${1:// Don't disable the default theme.
  if (\$pos = array_search(variable_get('theme_default', 'bartik'), \$theme_list) !== FALSE) {
    unset(\$theme_list[\$pos]);
    if (empty(\$theme_list)) {
      return;
    \}
  \}

  drupal_clear_css_cache();

  foreach (\$theme_list as \$key) {
    db_update('system')
      ->fields(array('status' => 0))
      ->condition('type', 'theme')
      ->condition('name', \$key)
      ->execute();
  \}

  list_themes(TRUE);
  menu_rebuild();
  drupal_theme_rebuild();

  // Invoke hook_themes_enabled after the themes have been enabled.
  module_invoke_all('themes_disabled', \$theme_list);

  return;}
}

$2