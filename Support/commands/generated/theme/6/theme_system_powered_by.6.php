/**
 * Implements theme_system_powered_by().
 */
function <?php print $basename; ?>_system_powered_by(\$image_path) {
  ${1:\$image = theme('image', \$image_path, t('Powered by Drupal, an open source content management system'), t('Powered by Drupal, an open source content management system'));
  return l(\$image, 'http://drupal.org', array('html' => TRUE, 'absolute' => TRUE, 'external' => TRUE));}
}

$2