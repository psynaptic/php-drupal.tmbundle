/**
 * Implements theme_aggregator_categorize_items().
 */
function <?php print $basename; ?>_aggregator_categorize_items(\$variables) {
  ${1:\$form = \$variables['form'];

  \$output = drupal_render(\$form['feed_source']);
  \$rows = array();
  if (!empty(\$form['items'])) {
    foreach (element_children(\$form['items']) as \$key) {
      \$rows[] = array(
        drupal_render(\$form['items'][\$key]),
        array('data' => drupal_render(\$form['categories'][\$key]), 'class' => array('categorize-item')),
      );
    \}
  \}
  \$output .= theme('table', array('header' => array('', t('Categorize')), 'rows' => \$rows));
  \$output .= drupal_render(\$form['submit']);
  \$output .= drupal_render_children(\$form);

  return theme('aggregator_wrapper', array('content' => \$output));}
}

$2