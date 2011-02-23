/**
 * Implements theme_filter_admin_overview().
 */
function <?php print $basename; ?>_filter_admin_overview(\$variables) {
  ${1:\$form = \$variables['form'];

  \$rows = array();
  foreach (element_children(\$form['formats']) as \$id) {
    \$form['formats'][\$id]['weight']['#attributes']['class'] = array('text-format-order-weight');
    \$rows[] = array(
      'data' => array(
        drupal_render(\$form['formats'][\$id]['name']),
        drupal_render(\$form['formats'][\$id]['roles']),
        drupal_render(\$form['formats'][\$id]['weight']),
        drupal_render(\$form['formats'][\$id]['configure']),
        drupal_render(\$form['formats'][\$id]['disable']),
      ),
      'class' => array('draggable'),
    );
  \}
  \$header = array(t('Name'), t('Roles'), t('Weight'), array('data' => t('Operations'), 'colspan' => 2));
  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'text-format-order')));
  \$output .= drupal_render_children(\$form);

  drupal_add_tabledrag('text-format-order', 'order', 'sibling', 'text-format-order-weight');

  return \$output;}
}

$2