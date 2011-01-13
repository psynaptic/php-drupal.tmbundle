/**
 * Implements hook_updater_info().
 */
function <?php print $basename; ?>_updater_info() {
  ${1:return array(
    'module' => array(
      'class' => 'ModuleUpdater',
      'name' => t('Update modules'),
      'weight' => 0,
    ),
    'theme' => array(
      'class' => 'ThemeUpdater',
      'name' => t('Update themes'),
      'weight' => 0,
    ),
  );}
}

$2