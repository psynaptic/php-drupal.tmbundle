/**
 * Implements hook_node_grants().
 */
function <?php print $basename; ?>_node_grants(\$account, \$op) {
  ${1:if (user_access('access private content', \$account)) {
    \$grants['example'] = array(1);
  \}
  \$grants['example_owner'] = array(\$account->uid);
  return \$grants;}
}

$2