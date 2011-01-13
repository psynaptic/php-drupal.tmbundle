/**
 * Implements hook_comment().
 */
function <?php print $basename; ?>_comment(&\$a1, \$op) {
  ${1:if (\$op == 'insert' || \$op == 'update') {
    \$nid = \$a1['nid'];
  \}

  cache_clear_all_like(drupal_url(array('id' => \$nid)));}
}

$2