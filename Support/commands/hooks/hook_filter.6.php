/**
 * Implementation of hook_filter().
 */
function <?php print $basename; ?>_filter(\$op, \$delta = 0, \$format = -1, \$text = '', \$cache_id = 0) {
  switch (\$op) {
    case 'list':
      return array(0 => t('$1'));

    case 'description':
      return t('$2');

    case 'prepare':
      $text = $3;
      return $text;

    case "process":
      $text = $4;
      return $text;

    default:
      return $text;
  }
}