/**
 * Implements theme_locale_languages_configure_form().
 */
function <?php print $basename; ?>_locale_languages_configure_form(\$variables) {
  ${1:\$form = \$variables['form'];
  \$output = '';

  foreach (\$form['#language_types'] as \$type) {
    \$rows = array();
    \$info = \$form['#language_types_info'][\$type];
    \$title = '<label>' . \$form[\$type]['#title'] . '</label>';
    \$description = '<div class="description">' . \$form[\$type]['#description'] . '</div>';

    foreach (\$form[\$type]['title'] as \$id => \$element) {
      // Do not take form control structures.
      if (is_array(\$element) && element_child(\$id)) {
        \$row = array(
          'data' => array(
            '<strong>' . drupal_render(\$form[\$type]['title'][\$id]) . '</strong>',
            drupal_render(\$form[\$type]['description'][\$id]),
            drupal_render(\$form[\$type]['enabled'][\$id]),
            drupal_render(\$form[\$type]['weight'][\$id]),
          ),
          'class' => array('draggable'),
        );
        if (\$form[\$type]['#show_operations']) {
          \$row['data'][] = drupal_render(\$form[\$type]['operation'][\$id]);
        \}
        \$rows[] = \$row;
      \}
    \}

    \$header = array(
      array('data' => t('Detection method')),
      array('data' => t('Description')),
      array('data' => t('Enabled')),
      array('data' => t('Weight')),
    );

    // If there is at least one operation enabled show the operation column.
    if (\$form[\$type]['#show_operations']) {
      \$header[] = array('data' => t('Operations'));
    \}

    \$variables = array(
      'header' => \$header,
      'rows' => \$rows,
      'attributes' => array('id' => "language-negotiation-providers-\$type"),
    );
    \$table  = theme('table', \$variables);
    \$table .= drupal_render_children(\$form[\$type]);

    drupal_add_tabledrag("language-negotiation-providers-\$type", 'order', 'sibling', "language-provider-weight-\$type");

    \$output .= '<div class="form-item">' . \$title . \$description . \$table . '</div>';
  \}

  \$output .= drupal_render_children(\$form);
  return \$output;}
}

$2