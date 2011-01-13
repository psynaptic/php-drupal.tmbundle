/**
 * Implements hook_ping().
 */
function <?php print $basename; ?>_ping(\$name = '', \$url = '') {
  ${1:\$feed = url('node/feed');

  \$client = new xmlrpc_client('/RPC2', 'rpc.weblogs.com', 80);

  \$message = new xmlrpcmsg('weblogUpdates.ping',
    array(new xmlrpcval(\$name), new xmlrpcval(\$url)));

  \$result = \$client->send(\$message);

  if (!\$result || \$result->faultCode()) {
    watchdog('error', 'failed to notify "weblogs.com" (site)');
  \}

  unset(\$client);}
}

$2