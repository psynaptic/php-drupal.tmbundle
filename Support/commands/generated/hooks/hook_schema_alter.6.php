/**
 * Implements hook_schema_alter().
 */
function <?php print $basename; ?>_schema_alter(&\$schema) {
  ${1:// Add field to existing schema.
  \$schema['users']['fields']['timezone_id'] = array(
    'type' => 'int',
    'not null' => TRUE,
    'default' => 0,
    'description' => 'Per-user timezone configuration.',
  );}
}

$2