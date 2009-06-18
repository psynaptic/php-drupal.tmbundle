/**
 * Format a username.
 *
 * @param \$object
 *   The user object to format, usually returned from user_load().
 * @return
 *   A string containing an HTML link to the user's page if the passed object
 *   suggests that this is a site user. Otherwise, only the username is returned.
 */
function theme_username(\$object) {

  if (\$object->uid && \$object->name) {
    // Shorten the name when it is too long or it will break many tables.
    if (drupal_strlen(\$object->name) > 20) {
      \$name = drupal_substr(\$object->name, 0, 15) .'...';
    }
    else {
      \$name = \$object->name;
    }

    if (user_access('access user profiles')) {
      \$output = l(\$name, 'user/'. \$object->uid, array('title' => t('View user profile.')));
    }
    else {
      \$output = check_plain(\$name);
    }
  }
  else if (\$object->name) {
    // Sometimes modules display content composed by people who are
    // not registered members of the site (e.g. mailing list or news
    // aggregator modules). This clause enables modules to display
    // the true author of the content.
    if (\$object->homepage) {
      \$output = l(\$object->name, \$object->homepage);
    }
    else {
      \$output = check_plain(\$object->name);
    }

    \$output .= ' ('. t('not verified') .')';
  }
  else {
    \$output = variable_get('anonymous', t('Anonymous'));
  }

  return \$output;
}

$1