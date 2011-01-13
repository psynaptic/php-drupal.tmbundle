/**
 * Implements hook_user_insert().
 */
function <?php print $basename; ?>_user_insert(&\$edit, \$account, \$category) {
  ${1:db_insert('mytable')
    ->fields(array(
    'myfield' => \$edit['myfield'], 
    'uid' => \$account->uid,
  ))
    ->execute();}
}

$2