/**
 * Implements hook_entity_load().
 */
function <?php print $basename; ?>_entity_load(\$entities, \$type) {
  ${1:foreach (\$entities as \$entity) {
    \$entity->foo = mymodule_add_something(\$entity, \$type);
  \}}
}

$2