/**
 * Implements hook_taxonomy_vocabulary_update().
 */
function <?php print $basename; ?>_taxonomy_vocabulary_update(\$vocabulary) {
  ${1:\$status = \$vocabulary->synonyms ? TRUE : FALSE;
  if (\$vocabulary->synonyms) {
    variable_set('taxonomy_' . \$vocabulary->vid . '_synonyms', \$status);
  \}}
}

$2