/**
 * Implements hook_validate().
 */
function <?php print $basename; ?>_validate(\$node, &\$form) {
  ${1:if (isset(\$node->end) && isset(\$node->start)) {
    if (\$node->start > \$node->end) {
      form_set_error('time', t('An event may not end before it starts.'));
    \}
  \}}
}

$2