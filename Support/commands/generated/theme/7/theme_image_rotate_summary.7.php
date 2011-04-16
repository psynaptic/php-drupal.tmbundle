/**
 * Implements theme_image_rotate_summary().
 */
function <?php print $basename; ?>_image_rotate_summary(\$variables) {
  ${1:\$data = \$variables['data'];
  return (\$data['random']) ? t('random between -@degrees&deg and @degrees&deg', array('@degrees' => str_replace('-', '', \$data['degrees']))) : t('@degrees&deg', array('@degrees' => \$data['degrees']));}
}

$2