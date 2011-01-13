/**
 * Implements hook_field_formatter_info().
 *
 * Declare the field formatters provided by the module.
 */
function <?php print $basename; ?>_field_formatter_info() {
  \$formatters = array();
  \$formatters['$1'] = array(
    'label' => t('$2'),
    'field types' => array('$3'),
  );
  $4
  return \$formatters;
}

$5