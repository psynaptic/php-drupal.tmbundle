/**
 * Implements theme_enable().
 */
function <?php print $basename; ?>_enable(\$theme_list) {
  ${1:drupal_clear_css_cache();

  foreach (\$theme_list as \$key) {
    db_update('system')
      ->fields(array('status' => 1))
      ->condition('type', 'theme')
      ->condition('name', \$key)
      ->execute();
  \}

  list_themes(TRUE);
  menu_rebuild();
  drupal_theme_rebuild();

  // Notify locale module about new themes being enabled, so translations can
  // be imported. This might start a batch, and only return to the redirect
  // path after that.
  module_invoke('locale', 'system_update', \$theme_list);

  // Invoke hook_themes_enabled after the themes have been enabled.
  module_invoke_all('themes_enabled', \$theme_list);

  return;}
}

$2