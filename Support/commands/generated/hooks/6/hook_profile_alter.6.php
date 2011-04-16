/**
 * Implements hook_profile_alter().
 */
function <?php print $basename; ?>_profile_alter(&\$account) {
  ${1:foreach (\$account->content AS \$key => \$field) {
    // do something
  \}}
}

$2