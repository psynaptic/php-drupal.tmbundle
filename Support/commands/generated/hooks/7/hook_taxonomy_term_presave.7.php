/**
 * Implements hook_taxonomy_term_presave().
 */
function <?php print $basename; ?>_taxonomy_term_presave(\$term) {
  ${1:\$term->foo = 'bar';}
}

$2