/**
 * Implements hook_entity_presave().
 */
function <?php print $basename; ?>_entity_presave(\$entity, \$type) {
  ${1:\$entity->changed = REQUEST_TIME;}
}

$2