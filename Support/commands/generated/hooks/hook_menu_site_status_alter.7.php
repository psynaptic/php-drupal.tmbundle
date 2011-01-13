/**
 * Implements hook_menu_site_status_alter().
 */
function <?php print $basename; ?>_menu_site_status_alter(&\$menu_site_status, \$path) {
  ${1:// Allow access to my_module/authentication even if site is in offline mode.
  if (\$menu_site_status == MENU_SITE_OFFLINE && user_is_anonymous() && \$path == 'my_module/authentication') {
    \$menu_site_status = MENU_SITE_ONLINE;
  \}}
}

$2