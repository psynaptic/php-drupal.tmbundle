/**
 * Implements hook_taxonomy_vocabulary_insert().
 */
function <?php print $basename; ?>_taxonomy_vocabulary_insert(\$vocabulary) {
  ${1:if (\$vocabulary->synonyms) {
    variable_set('taxonomy_' . \$vocabulary->vid . '_synonyms', TRUE);
  \}}
}

$2