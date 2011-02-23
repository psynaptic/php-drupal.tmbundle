/**
 * Implements theme_image_style_effects().
 */
function <?php print $basename; ?>_image_style_effects(\$variables) {
  ${1:\$form = \$variables['form'];

  \$rows = array();

  foreach (element_children(\$form) as \$key) {
    \$row = array();
    \$form[\$key]['weight']['#attributes']['class'] = array('image-effect-order-weight');
    if (is_numeric(\$key)) {
      \$summary = drupal_render(\$form[\$key]['summary']);
      \$row[] = drupal_render(\$form[\$key]['label']) . (empty(\$summary) ? '' : ' ' . \$summary);
      \$row[] = drupal_render(\$form[\$key]['weight']);
      \$row[] = drupal_render(\$form[\$key]['configure']);
      \$row[] = drupal_render(\$form[\$key]['remove']);
    \}
    else {
      // Add the row for adding a new image effect.
      \$row[] = '<div class="image-style-new">' . drupal_render(\$form['new']['new']) . drupal_render(\$form['new']['add']) . '</div>';
      \$row[] = drupal_render(\$form['new']['weight']);
      \$row[] = array('data' => '', 'colspan' => 2);
    \}

    if (!isset(\$form[\$key]['#access']) || \$form[\$key]['#access']) {
      \$rows[] = array(
        'data' => \$row,
        'class' => !empty(\$form[\$key]['weight']['#access']) || \$key == 'new' ? array('draggable') : array(),
      );
    \}
  \}

  \$header = array(
    t('Effect'),
    t('Weight'),
    array('data' => t('Operations'), 'colspan' => 2),
  );

  if (count(\$rows) == 1 && \$form['new']['#access']) {
    array_unshift(\$rows, array(array(
      'data' => t('There are currently no effects in this style. Add one by selecting an option below.'),
      'colspan' => 4,
    )));
  \}

  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'image-style-effects')));
  drupal_add_tabledrag('image-style-effects', 'order', 'sibling', 'image-effect-order-weight');
  return \$output;}
}

$2