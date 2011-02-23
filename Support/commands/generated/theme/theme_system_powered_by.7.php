/**
 * Implements theme_system_powered_by().
 */
function <?php print $basename; ?>_system_powered_by() {
  ${1:return '<span>' . t('Powered by <a href="@poweredby">Drupal</a>', array('@poweredby' => 'http://drupal.org')) . '</span>';}
}

$2