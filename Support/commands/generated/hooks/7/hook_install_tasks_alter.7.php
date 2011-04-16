/**
 * Implements hook_install_tasks_alter().
 */
function <?php print $basename; ?>_install_tasks_alter(&\$tasks, \$install_state) {
  ${1:// Replace the "Choose language" installation task provided by Drupal core
  // with a custom callback function defined by this installation profile.
  \$tasks['install_select_locale']['function'] = 'myprofile_locale_selection';}
}

$2