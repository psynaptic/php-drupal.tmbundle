/**
 * Implements hook_date_format_types().
 */
function <?php print $basename; ?>_date_format_types() {
  ${1:return array(
    'long' => t('Long'),
    'medium' => t('Medium'),
    'short' => t('Short'),
  );}
}

$2