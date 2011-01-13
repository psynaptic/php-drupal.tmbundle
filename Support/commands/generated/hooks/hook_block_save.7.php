/**
 * Implements hook_block_save().
 */
function <?php print $basename; ?>_block_save(\$delta = '', \$edit = array()) {
  if (\$delta == '$1') {
    variable_set('$2', \$edit['$3']);
  }
}

$4