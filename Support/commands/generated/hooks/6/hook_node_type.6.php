/**
 * Implements hook_node_type().
 */
function <?php print $basename; ?>_node_type(\$op, \$info) {
  ${1:switch (\$op){
    case 'delete':
      // Example from comment.module.
      variable_del('comment_'. \$info->type);
      break;
    case 'update':
      // Here is an example where you do need an update operation (from the
      // book module), because the simple default case doesn't cover what needs
      // to be done.
      if (!empty(\$type->old_type) && \$type->old_type != \$type->type) {
        // Update the list of node types that are allowed to be added to books.
        \$allowed_types = variable_get('book_allowed_types', array('book'));
        \$key = array_search(\$type->old_type, \$allowed_types);
        if (\$key !== FALSE) {
          \$allowed_types[\$type->type] = \$allowed_types[\$key] ? \$type->type : 0;
          unset(\$allowed_types[\$key]);
          variable_set('book_allowed_types', \$allowed_types);
        \}
        // Update the setting for the "Add child page" link.
        if (variable_get('book_child_type', 'book') == \$type->old_type) {
          variable_set('book_child_type', \$type->type);
        \}
      \}
      break;
  \}}
}

$2