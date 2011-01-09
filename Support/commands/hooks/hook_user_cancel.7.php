/**
 * Implements hook_user_cancel().
 */
function <?php print $basename; ?>_user_cancel(\$edit, \$account, \$method) {
  ${1:switch (\$method) {
    case 'user_cancel_block':
      // Code goes here.
      break;
          
    case 'user_cancel_block_unpublish':
      // Code goes here.
      break;

    case 'user_cancel_reassign':
      // Code goes here.
      break;
      
    case 'user_cancel_delete':
      // Code goes here.
      break;
  \}}
}

$2