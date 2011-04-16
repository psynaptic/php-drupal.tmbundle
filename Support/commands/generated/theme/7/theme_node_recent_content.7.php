/**
 * Implements theme_node_recent_content().
 */
function <?php print $basename; ?>_node_recent_content(\$variables) {
  ${1:\$node = \$variables['node'];

  \$output = '<div class="node-title">';
  \$output .= l(\$node->title, 'node/' . \$node->nid);
  \$output .= theme('mark', array('type' => node_mark(\$node->nid, \$node->changed)));
  \$output .= '</div><div class="node-author">';
  \$output .= theme('username', array('account' => user_load(\$node->uid)));
  \$output .= '</div>';

  return \$output;}
}

$2