/**
 * Implements hook_field_purge_field_instance().
 */
function <?php print $basename; ?>_field_purge_field_instance(\$instance) {
  ${1:db_delete('my_module_field_instance_info')
    ->condition('id', \$instance['id'])
    ->execute();}
}

$2