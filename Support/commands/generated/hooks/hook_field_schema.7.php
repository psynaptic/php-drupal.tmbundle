/**
 * Implements hook_field_schema().
 */
function <?php print $basename; ?>_field_schema(\$field) {
  ${1:if (\$field['type'] == 'text_long') {
    \$columns = array(
      'value' => array(
        'type' => 'text',
        'size' => 'big',
        'not null' => FALSE,
      ),
    );
  \}
  else {
    \$columns = array(
      'value' => array(
        'type' => 'varchar',
        'length' => \$field['settings']['max_length'],
        'not null' => FALSE,
      ),
    );
  \}
  \$columns += array(
    'format' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  );
  return array(
    'columns' => \$columns,
    'indexes' => array(
      'format' => array('format'),
    ),
    'foreign keys' => array(
      'format' => array(
        'table' => 'filter_format',
        'columns' => array('format' => 'format'),
      ),
    ),
  );}
}

$2