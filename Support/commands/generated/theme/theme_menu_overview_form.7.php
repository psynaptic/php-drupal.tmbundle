/**
 * Implements theme_menu_overview_form().
 */
function <?php print $basename; ?>_menu_overview_form(\$variables) {
  ${1:\$form = \$variables['form'];

  drupal_add_tabledrag('menu-overview', 'match', 'parent', 'menu-plid', 'menu-plid', 'menu-mlid', TRUE, MENU_MAX_DEPTH - 1);
  drupal_add_tabledrag('menu-overview', 'order', 'sibling', 'menu-weight');

  \$header = array(
    t('Menu link'),
    array('data' => t('Enabled'), 'class' => array('checkbox')),
    t('Weight'),
    array('data' => t('Operations'), 'colspan' => '3'),
  );

  \$rows = array();
  foreach (element_children(\$form) as \$mlid) {
    if (isset(\$form[\$mlid]['hidden'])) {
      \$element = &\$form[\$mlid];
      // Build a list of operations.
      \$operations = array();
      foreach (element_children(\$element['operations']) as \$op) {
        \$operations[] = array('data' => drupal_render(\$element['operations'][\$op]), 'class' => array('menu-operations'));
      \}
      while (count(\$operations) < 2) {
        \$operations[] = '';
      \}

      // Add special classes to be used for tabledrag.js.
      \$element['plid']['#attributes']['class'] = array('menu-plid');
      \$element['mlid']['#attributes']['class'] = array('menu-mlid');
      \$element['weight']['#attributes']['class'] = array('menu-weight');

      // Change the parent field to a hidden. This allows any value but hides the field.
      \$element['plid']['#type'] = 'hidden';

      \$row = array();
      \$row[] = theme('indentation', array('size' => \$element['#item']['depth'] - 1)) . drupal_render(\$element['title']);
      \$row[] = array('data' => drupal_render(\$element['hidden']), 'class' => array('checkbox', 'menu-enabled'));
      \$row[] = drupal_render(\$element['weight']) . drupal_render(\$element['plid']) . drupal_render(\$element['mlid']);
      \$row = array_merge(\$row, \$operations);

      \$row = array_merge(array('data' => \$row), \$element['#attributes']);
      \$row['class'][] = 'draggable';
      \$rows[] = \$row;
    \}
  \}
  \$output = '';
  if (empty(\$rows)) {
    \$rows[] = array(array('data' => \$form['#empty_text'], 'colspan' => '7'));
  \}
  \$output .= theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'menu-overview')));
  \$output .= drupal_render_children(\$form);
  return \$output;}
}

$2