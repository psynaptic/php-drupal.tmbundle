/**
 * Implements hook_field_attach_create_bundle().
 */
function <?php print $basename; ?>_field_attach_create_bundle(\$entity_type, \$bundle) {
  ${1:// When a new bundle is created, the menu needs to be rebuilt to add the
  // Field UI menu item tabs.
  variable_set('menu_rebuild_needed', TRUE);}
}

$2