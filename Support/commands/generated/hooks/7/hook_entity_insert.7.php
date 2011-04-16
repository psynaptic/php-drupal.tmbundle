/**
 * Implements hook_entity_insert().
 */
function <?php print $basename; ?>_entity_insert(\$entity, \$type) {
  ${1:// Insert the new entity into a fictional table of all entities.
  \$info = entity_get_info(\$type);
  list(\$id) = entity_extract_ids(\$type, \$entity);
  db_insert('example_entity')
    ->fields(array(
      'type' => \$type,
      'id' => \$id,
      'created' => REQUEST_TIME,
      'updated' => REQUEST_TIME,
    ))
    ->execute();}
}

$2