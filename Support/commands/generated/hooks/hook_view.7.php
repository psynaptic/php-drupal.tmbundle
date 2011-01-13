/**
 * Implements hook_view().
 */
function <?php print $basename; ?>_view(\$node, \$view_mode) {
  ${1:if (\$view_mode == 'full' && node_is_page(\$node)) {
    \$breadcrumb = array();
    \$breadcrumb[] = l(t('Home'), NULL);
    \$breadcrumb[] = l(t('Example'), 'example');
    \$breadcrumb[] = l(\$node->field1, 'example/' . \$node->field1);
    drupal_set_breadcrumb(\$breadcrumb);
  \}

  \$node->content['myfield'] = array(
    '#markup' => theme('mymodule_myfield', \$node->myfield),
    '#weight' => 1,
  );

  return \$node;}
}

$2