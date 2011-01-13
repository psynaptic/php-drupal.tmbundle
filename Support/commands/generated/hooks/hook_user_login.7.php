/**
 * Implements hook_user_login().
 */
function <?php print $basename; ?>_user_login(&\$edit, \$account) {
  ${1:// If the user has a NULL time zone, notify them to set a time zone.
  if (!\$account->timezone && variable_get('configurable_timezones', 1) && variable_get('empty_timezone_message', 0)) {
    drupal_set_message(t('Configure your <a href="@user-edit">account time zone setting</a>.', array('@user-edit' => url("user/\$account->uid/edit", array('query' => drupal_get_destination(), 'fragment' => 'edit-timezone')))));
  \}}
}

$2