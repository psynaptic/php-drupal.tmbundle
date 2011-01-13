/**
 * Implements hook_url_outbound_alter().
 */
function <?php print $basename; ?>_url_outbound_alter(&\$path, &\$options, \$original_path) {
  ${1:// Use an external RSS feed rather than the Drupal one.
  if (\$path == 'rss.xml') {
    \$path = 'http://example.com/rss.xml';
    \$options['external'] = TRUE;
  \}

  // Instead of pointing to user/[uid]/edit, point to user/me/edit.
  if (preg_match('|^user/([0-9]*)/edit(/.*)?|', \$path, \$matches)) {
    global \$user;
    if (\$user->uid == \$matches[1]) {
      \$path = 'user/me/edit' . \$matches[2];
    \}
  \}}
}

$2