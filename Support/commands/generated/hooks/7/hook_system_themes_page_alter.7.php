/**
 * Implements hook_system_themes_page_alter().
 */
function <?php print $basename; ?>_system_themes_page_alter(&\$theme_groups) {
  ${1:foreach (\$theme_groups as \$state => &\$group) {
    foreach (\$theme_groups[\$state] as &\$theme) {
      // Add a foo link to each list of theme operations.
      \$theme->operations[] = l(t('Foo'), 'admin/appearance/foo', array('query' => array('theme' => \$theme->name)));
    \}
  \}}
}

$2