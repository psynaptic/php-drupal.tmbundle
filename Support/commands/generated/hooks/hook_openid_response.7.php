/**
 * Implements hook_openid_response().
 */
function <?php print $basename; ?>_openid_response(\$response, \$account) {
  ${1:if (isset(\$response['openid.ns.ax'])) {
    _mymodule_store_ax_fields(\$response, \$account);
  \}}
}

$2