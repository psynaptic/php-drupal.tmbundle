/**
 * Implements hook_taxonomy_vocabulary_delete().
 */
function <?php print $basename; ?>_taxonomy_vocabulary_delete(\$vocabulary) {
  ${1:if (variable_get('taxonomy_' . \$vocabulary->vid . '_synonyms', FALSE)) {
    variable_del('taxonomy_' . \$vocabulary->vid . '_synonyms');
  \}}
}

$2