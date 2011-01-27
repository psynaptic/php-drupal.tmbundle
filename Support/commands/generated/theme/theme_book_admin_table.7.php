/**
 * Implements theme_book_admin_table().
 */
function <?php print $basename; ?>_book_admin_table(\$variables) {
  ${1:\$form = \$variables['form'];

  drupal_add_tabledrag('book-outline', 'match', 'parent', 'book-plid', 'book-plid', 'book-mlid', TRUE, MENU_MAX_DEPTH - 2);
  drupal_add_tabledrag('book-outline', 'order', 'sibling', 'book-weight');

  \$header = array(t('Title'), t('Weight'), t('Parent'), array('data' => t('Operations'), 'colspan' => '3'));

  \$rows = array();
  \$destination = drupal_get_destination();
  \$access = user_access('administer nodes');
  foreach (element_children(\$form) as \$key) {
    \$nid = \$form[\$key]['nid']['#value'];
    \$href = \$form[\$key]['href']['#value'];

    // Add special classes to be used with tabledrag.js.
    \$form[\$key]['plid']['#attributes']['class'] = array('book-plid');
    \$form[\$key]['mlid']['#attributes']['class'] = array('book-mlid');
    \$form[\$key]['weight']['#attributes']['class'] = array('book-weight');

    \$data = array(
      theme('indentation', array('size' => \$form[\$key]['depth']['#value'] - 2)) . drupal_render(\$form[\$key]['title']),
      drupal_render(\$form[\$key]['weight']),
      drupal_render(\$form[\$key]['plid']) . drupal_render(\$form[\$key]['mlid']),
      l(t('view'), \$href),
      \$access ? l(t('edit'), 'node/' . \$nid . '/edit', array('query' => \$destination)) : '&nbsp;',
      \$access ? l(t('delete'), 'node/' . \$nid . '/delete', array('query' => \$destination) )  : '&nbsp;',
    );
    \$row = array('data' => \$data);
    if (isset(\$form[\$key]['#attributes'])) {
      \$row = array_merge(\$row, \$form[\$key]['#attributes']);
    \}
    \$row['class'][] = 'draggable';
    \$rows[] = \$row;
  \}

  return theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'book-outline')));}
}

$2