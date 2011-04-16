/**
 * Implements hook_url_inbound_alter().
 */
function <?php print $basename; ?>_url_inbound_alter(&\$path, \$original_path, \$path_language) {
  ${1:// Create the path user/me/edit, which allows a user to edit their account.
  if (preg_match('|^user/me/edit(/.*)?|', \$path, \$matches)) {
    global \$user;
    \$path = 'user/' . \$user->uid . '/edit' . \$matches[1];
  \}}
}

$2