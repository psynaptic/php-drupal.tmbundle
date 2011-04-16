/**
 * Implements hook_xmlrpc().
 */
function <?php print $basename; ?>_xmlrpc() {
  ${1:return array(
    'drupal.login' => 'drupal_login',
    array(
      'drupal.site.ping',
      'drupal_directory_ping',
      array('boolean', 'string', 'string', 'string', 'string', 'string'),
      t('Handling ping request'))
  );}
}

$2