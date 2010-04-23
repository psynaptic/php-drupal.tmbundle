/**
 * Implements hook_schema().
 */
function <?php print $basename; ?>_schema() {
  \$schema = array();
  \$schema[$1] = array(
    'description' => '$2',
    'fields' => array(
      $3
    ),
  );
  return \$schema;
}

$4