/**
 * Implements hook_taxonomy_term_delete().
 */
function <?php print $basename; ?>_taxonomy_term_delete(\$term) {
  ${1:db_delete('term_synoynm')->condition('tid', \$term->tid)->execute();}
}

$2