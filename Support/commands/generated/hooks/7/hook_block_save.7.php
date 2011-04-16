/**
 * Implements hook_block_save().
 */
function <?php print $basename; ?>_block_save(\$delta = '', \$edit = array()) {
  ${1:// This example comes from node.module.
  if (\$delta == 'recent') {
    variable_set('node_recent_block_count', \$edit['node_recent_block_count']);
  \}}
}

$2