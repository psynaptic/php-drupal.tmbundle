/**
 * Implements hook_user_logout().
 */
function <?php print $basename; ?>_user_logout(\$account) {
  ${1:db_insert('logouts')
    ->fields(array(
      'uid' => \$account->uid,
      'time' => time(),
    ))
    ->execute();}
}

$2