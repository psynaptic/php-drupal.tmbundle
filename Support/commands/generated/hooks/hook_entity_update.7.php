/**
 * Implements hook_entity_update().
 */
function <?php print $basename; ?>_entity_update(\$entity, \$type) {
  ${1:// Update the entity's entry in a fictional table of all entities.
  \$info = entity_get_info(\$type);
  list(\$id) = entity_extract_ids(\$type, \$entity);
  db_update('example_entity')
    ->fields(array(
      'updated' => REQUEST_TIME,
    ))
    ->condition('type', \$type)
    ->condition('id', \$id)
    ->execute();}
}

$2