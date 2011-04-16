/**
 * Implements hook_updater_info_alter().
 */
function <?php print $basename; ?>_updater_info_alter(&\$updaters) {
  ${1:// Adjust weight so that the theme Updater gets a chance to handle a given
  // update task before module updaters.
  \$updaters['theme']['weight'] = -1;}
}

$2