/**
 * Implements hook_openid().
 */
function <?php print $basename; ?>_openid(\$op, \$request) {
  ${1:if (\$op == 'request') {
    \$request['openid.identity'] = 'http://myname.myopenid.com/';
  \}
  return \$request;}
}

$2