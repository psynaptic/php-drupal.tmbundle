/**
 * Implements hook_requirements().
 */
function <?php print $basename; ?>_requirements(\$phase) {
  ${1:\$requirements = array();
  // Ensure translations don't break at install time
  \$t = get_t();

  // Report Drupal version
  if (\$phase == 'runtime') {
    \$requirements['drupal'] = array(
      'title' => \$t('Drupal'),
      'value' => VERSION,
      'severity' => REQUIREMENT_INFO
    );
  \}

  // Test PHP version
  \$requirements['php'] = array(
    'title' => \$t('PHP'),
    'value' => (\$phase == 'runtime') ? l(phpversion(), 'admin/logs/status/php') : phpversion(),
  );
  if (version_compare(phpversion(), DRUPAL_MINIMUM_PHP) < 0) {
    \$requirements['php']['description'] = \$t('Your PHP installation is too old. Drupal requires at least PHP %version.', array('%version' => DRUPAL_MINIMUM_PHP));
    \$requirements['php']['severity'] = REQUIREMENT_ERROR;
  \}

  // Report cron status
  if (\$phase == 'runtime') {
    \$cron_last = variable_get('cron_last', NULL);

    if (is_numeric(\$cron_last)) {
      \$requirements['cron']['value'] = \$t('Last run !time ago', array('!time' => format_interval(time() - \$cron_last)));
    \}
    else {
      \$requirements['cron'] = array(
        'description' => \$t('Cron has not run. It appears cron jobs have not been setup on your system. Please check the help pages for <a href="@url">configuring cron jobs</a>.', array('@url' => 'http://drupal.org/cron')),
        'severity' => REQUIREMENT_ERROR,
        'value' => \$t('Never run'),
      );
    \}

    \$requirements['cron']['description'] .= ' '. t('You can <a href="@cron">run cron manually</a>.', array('@cron' => url('admin/logs/status/run-cron')));

    \$requirements['cron']['title'] = \$t('Cron maintenance tasks');
  \}

  return \$requirements;}
}

$2