/**
 * Implements hook_entity_delete().
 */
function <?php print $basename; ?>_entity_delete(\$entity, \$type) {
  ${1:// Delete the entity's entry from a fictional table of all entities.
  \$info = entity_get_info(\$type);
  list(\$id) = entity_extract_ids(\$type, \$entity);
  db_delete('example_entity')
    ->condition('type', \$type)
    ->condition('id', \$id)
    ->execute();}
}

$2