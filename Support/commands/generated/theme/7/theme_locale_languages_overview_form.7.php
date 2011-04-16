/**
 * Implements theme_locale_languages_overview_form().
 */
function <?php print $basename; ?>_locale_languages_overview_form(\$variables) {
  ${1:\$form = \$variables['form'];
  \$default = language_default();
  foreach (\$form['name'] as \$key => \$element) {
    // Do not take form control structures.
    if (is_array(\$element) && element_child(\$key)) {
      // Disable checkbox for the default language, because it cannot be disabled.
      if (\$key == \$default->language) {
        \$form['enabled'][\$key]['#attributes']['disabled'] = 'disabled';
      \}
      \$rows[] = array(
        'data' => array(
          '<strong>' . drupal_render(\$form['name'][\$key]) . '</strong>',
          drupal_render(\$form['native'][\$key]),
          check_plain(\$key),
          drupal_render(\$form['direction'][\$key]),
          array('data' => drupal_render(\$form['enabled'][\$key]), 'align' => 'center'),
          drupal_render(\$form['site_default'][\$key]),
          drupal_render(\$form['weight'][\$key]),
          l(t('edit'), 'admin/config/regional/language/edit/' . \$key) . ((\$key != 'en' && \$key != \$default->language) ? ' ' . l(t('delete'), 'admin/config/regional/language/delete/' . \$key) : '')
        ),
        'class' => array('draggable'),
      );
    \}
  \}
  \$header = array(array('data' => t('English name')), array('data' => t('Native name')), array('data' => t('Code')), array('data' => t('Direction')), array('data' => t('Enabled')), array('data' => t('Default')), array('data' => t('Weight')), array('data' => t('Operations')));
  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'language-order')));
  \$output .= drupal_render_children(\$form);

  drupal_add_tabledrag('language-order', 'order', 'sibling', 'language-order-weight');

  return \$output;}
}

$2