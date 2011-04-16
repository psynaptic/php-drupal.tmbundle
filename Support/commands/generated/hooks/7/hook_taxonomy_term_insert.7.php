/**
 * Implements hook_taxonomy_term_insert().
 */
function <?php print $basename; ?>_taxonomy_term_insert(\$term) {
  ${1:if (!empty(\$term->synonyms)) {
    foreach (explode ("\n", str_replace("\r", '', \$term->synonyms)) as \$synonym) {
      if (\$synonym) {
        db_insert('taxonomy_term_synonym')
        ->fields(array(
          'tid' => \$term->tid,
          'name' => rtrim(\$synonym),
        ))
        ->execute();
      \}
    \}
  \}}
}

$2