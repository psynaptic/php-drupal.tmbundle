/**
 * Implements hook_field_attach_purge().
 */
function <?php print $basename; ?>_field_attach_purge(\$entity_type, \$entity, \$field, \$instance) {
  ${1:// find the corresponding data in mymodule and purge it
  if(\$entity_type == 'node' && \$field->field_name == 'my_field_name') {
    mymodule_remove_mydata(\$entity->nid);
  \}}
}

$2