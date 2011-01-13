/**
 * Implements hook_view().
 */
function <?php print $basename; ?>_view(\$node, \$teaser = FALSE, \$page = FALSE) {
  ${1:if (\$page) {
    \$breadcrumb = array();
    \$breadcrumb[] = l(t('Home'), NULL);
    \$breadcrumb[] = l(t('Example'), 'example');
    \$breadcrumb[] = l(\$node->field1, 'example/' . \$node->field1);
    drupal_set_breadcrumb(\$breadcrumb);
  \}

  \$node = node_prepare(\$node, \$teaser);
  \$node->content['myfield'] = array(
    '#value' => theme('mymodule_myfield', \$node->myfield),
    '#weight' => 1,
  );

  return \$node;}
}

$2