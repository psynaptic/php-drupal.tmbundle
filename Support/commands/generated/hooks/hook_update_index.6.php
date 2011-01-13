/**
 * Implements hook_update_index().
 */
function <?php print $basename; ?>_update_index() {
  ${1:\$last = variable_get('node_cron_last', 0);
  \$limit = (int)variable_get('search_cron_limit', 100);

  \$result = db_query_range('SELECT n.nid, c.last_comment_timestamp FROM {node\} n LEFT JOIN {node_comment_statistics\} c ON n.nid = c.nid WHERE n.status = 1 AND n.moderate = 0 AND (n.created > %d OR n.changed > %d OR c.last_comment_timestamp > %d) ORDER BY GREATEST(n.created, n.changed, c.last_comment_timestamp) ASC', \$last, \$last, \$last, 0, \$limit);

  while (\$node = db_fetch_object(\$result)) {
    \$last_comment = \$node->last_comment_timestamp;
    \$node = node_load(array('nid' => \$node->nid));

    // We update this variable per node in case cron times out, or if the node
    // cannot be indexed (PHP nodes which call drupal_goto, for example).
    // In rare cases this can mean a node is only partially indexed, but the
    // chances of this happening are very small.
    variable_set('node_cron_last', max(\$last_comment, \$node->changed, \$node->created));

    // Get node output (filtered and with module-specific fields).
    if (node_hook(\$node, 'view')) {
      node_invoke(\$node, 'view', false, false);
    \}
    else {
      \$node = node_prepare(\$node, false);
    \}
    // Allow modules to change \$node->body before viewing.
    node_invoke_nodeapi(\$node, 'view', false, false);

    \$text = '<h1>'. drupal_specialchars(\$node->title) .'</h1>'. \$node->body;

    // Fetch extra data normally not visible
    \$extra = node_invoke_nodeapi(\$node, 'update index');
    foreach (\$extra as \$t) {
      \$text .= \$t;
    \}

    // Update index
    search_index(\$node->nid, 'node', \$text);
  \}}
}

$2