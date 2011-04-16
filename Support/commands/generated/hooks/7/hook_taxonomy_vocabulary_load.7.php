/**
 * Implements hook_taxonomy_vocabulary_load().
 */
function <?php print $basename; ?>_taxonomy_vocabulary_load(\$vocabularies) {
  ${1:foreach (\$vocabularies as \$vocabulary) {
    \$vocabulary->synonyms = variable_get('taxonomy_' . \$vocabulary->vid . '_synonyms', FALSE);
  \}}
}

$2