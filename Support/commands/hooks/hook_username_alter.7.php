/**
 * Implements hook_username_alter().
 */
function <?php print $basename; ?>_username_alter(&\$name, \$account) {
  ${1:// Display the user's uid instead of name.
  if (isset(\$account->uid)) {
    \$name = t('User !uid', array('!uid' => \$account->uid));
  \}}
}

$2