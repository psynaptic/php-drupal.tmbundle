/**
 * Implements hook_mail_alter().
 */
function <?php print $basename; ?>_mail_alter(&\$message) {
  ${1:if (\$message['id'] == 'modulename_messagekey') {
    \$message['body'][] = "--\nMail sent out from " . variable_get('sitename', t('Drupal'));
  \}}
}

$2