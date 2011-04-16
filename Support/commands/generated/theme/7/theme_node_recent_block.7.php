/**
 * Implements theme_node_recent_block().
 */
function <?php print $basename; ?>_node_recent_block(\$variables) {
  ${1:\$rows = array();
  \$output = '';

  \$l_options = array('query' => drupal_get_destination());
  foreach (\$variables['nodes'] as \$node) {
    \$row = array();
    \$row[] = array(
      'data' => theme('node_recent_content', array('node' => \$node)),
      'class' => 'title-author',
    );
    \$row[] = array(
      'data' => node_access('update', \$node) ? l(t('edit'), 'node/' . \$node->nid . '/edit', \$l_options) : '',
      'class' => 'edit',
    );
    \$row[] = array(
      'data' => node_access('delete', \$node) ? l(t('delete'), 'node/' . \$node->nid . '/delete', \$l_options) : '',
      'class' => 'delete',
    );
    \$rows[] = \$row;
  \}

  if (\$rows) {
    \$output = theme('table', array('rows' => \$rows));
    if (user_access('access content overview')) {
      \$output .= theme('more_link', array('url' => 'admin/content', 'title' => t('Show more content')));
    \}
  \}

  return \$output;}
}

$2