/**
 * Implements hook_block_view().
 */
function <?php print $basename; ?>_block_view(\$delta = '') {
  ${1:// This example comes from node.module. Note that you can also return a
  // renderable array rather than rendered HTML for 'content'.
  \$block = array();

  switch (\$delta) {
    case 'syndicate':
      \$block['subject'] = t('Syndicate');
      \$block['content'] = theme('feed_icon', array('url' => url('rss.xml'), 'title' => t('Syndicate')));
      break;

    case 'recent':
      if (user_access('access content')) {
        \$block['subject'] = t('Recent content');
        if (\$nodes = node_get_recent(variable_get('node_recent_block_count', 10))) {
          \$block['content'] = theme('node_recent_block', array(
            'nodes' => \$nodes,
          ));
        \} else {
          \$block['content'] = t('No content available.');
        \}
      \}
      break;
  \}
  return \$block;}
}

$2