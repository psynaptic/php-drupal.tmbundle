/**
 * Implements hook_locale().
 */
function <?php print $basename; ?>_locale(\$op = 'groups') {
  ${1:switch (\$op) {
    case 'groups':
      return array('custom' => t('Custom'));
  \}}
}

$2