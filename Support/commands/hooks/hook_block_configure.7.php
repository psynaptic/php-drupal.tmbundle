/**
 * Implements hook_block_view().
 */
function <?php print $basename; ?>_block_configure(\ $delta = '') {
  \$form = array();
  if (\$delta == '$1') {
    $form['$2'] = array(
      $3
    );
  }
  return $form;
}

$4