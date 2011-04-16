/**
 * Implements hook_user_delete().
 */
function <?php print $basename; ?>_user_delete(\$account) {
  ${1:db_delete('mytable')
    ->condition('uid', \$account->uid)
    ->execute();}
}

$2