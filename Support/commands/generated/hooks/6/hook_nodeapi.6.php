/**
 * Implements hook_nodeapi().
 */
function <?php print $basename; ?>_nodeapi(&\$node, \$op, \$a3 = NULL, \$a4 = NULL) {
  ${1:switch (\$op) {
    case 'presave':
      if (\$node->nid && \$node->moderate) {
        // Reset votes when node is updated:
        \$node->score = 0;
        \$node->users = '';
        \$node->votes = 0;
      \}
      break;
    case 'insert':
    case 'update':
      if (\$node->moderate && user_access('access submission queue')) {
        drupal_set_message(t('The post is queued for approval'));
      \}
      elseif (\$node->moderate) {
        drupal_set_message(t('The post is queued for approval. The editors will decide whether it should be published.'));
      \}
      break;
    case 'view':
      \$node->content['my_additional_field'] = array(
        '#value' => theme('mymodule_my_additional_field', \$additional_field),
        '#weight' => 10,
      );
      break;
  \}}
}

$2