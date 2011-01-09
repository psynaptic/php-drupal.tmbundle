/**
 * Implements hook_user_update().
 */
function <?php print $basename; ?>_user_update(&\$edit, \$account, \$category) {
  ${1:db_insert('user_changes')
    ->fields(array(
    'uid' => \$account->uid, 
    'changed' => time(),
  ))
    ->execute();}
}

$2