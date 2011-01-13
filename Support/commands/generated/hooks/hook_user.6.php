/**
 * Implements hook_user().
 */
function <?php print $basename; ?>_user(\$op, &\$edit, &\$account, \$category = NULL) {
  ${1:if (\$op == 'form' && \$category == 'account') {
    \$form['comment_settings'] = array(
      '#type' => 'fieldset',
      '#title' => t('Comment settings'),
      '#collapsible' => TRUE,
      '#weight' => 4);
    \$form['comment_settings']['signature'] = array(
      '#type' => 'textarea',
      '#title' => t('Signature'),
      '#default_value' => \$edit['signature'],
      '#description' => t('Your signature will be publicly displayed at the end of your comments.'));
    return \$form;
  \}}
}

$2