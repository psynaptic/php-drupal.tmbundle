/**
 * Implements hook_field_storage_query().
 */
function <?php print $basename; ?>_field_storage_query(\$query) {
  ${1:\$groups = array();
  if (\$query->age == FIELD_LOAD_CURRENT) {
    \$tablename_function = '_field_sql_storage_tablename';
    \$id_key = 'entity_id';
  \}
  else {
    \$tablename_function = '_field_sql_storage_revision_tablename';
    \$id_key = 'revision_id';
  \}
  \$table_aliases = array();
  // Add tables for the fields used.
  foreach (\$query->fields as \$key => \$field) {
    \$tablename = \$tablename_function(\$field);
    // Every field needs a new table.
    \$table_alias = \$tablename . \$key;
    \$table_aliases[\$key] = \$table_alias;
    if (\$key) {
      \$select_query->join(\$tablename, \$table_alias, "\$table_alias.entity_type = \$field_base_table.entity_type AND \$table_alias.\$id_key = \$field_base_table.\$id_key");
    \}
    else {
      \$select_query = db_select(\$tablename, \$table_alias);
      \$select_query->addTag('entity_field_access');
      \$select_query->addMetaData('base_table', \$tablename);
      \$select_query->fields(\$table_alias, array('entity_type', 'entity_id', 'revision_id', 'bundle'));
      \$field_base_table = \$table_alias;
    \}
    if (\$field['cardinality'] != 1) {
      \$select_query->distinct();
    \}
  \}

  // Add field conditions.
  foreach (\$query->fieldConditions as \$key => \$condition) {
    \$table_alias = \$table_aliases[\$key];
    \$field = \$condition['field'];
    // Add the specified condition.
    \$sql_field = "\$table_alias." . _field_sql_storage_columnname(\$field['field_name'], \$condition['column']);
    \$query->addCondition(\$select_query, \$sql_field, \$condition);
    // Add delta / language group conditions.
    foreach (array('delta', 'language') as \$column) {
      if (isset(\$condition[\$column . '_group'])) {
        \$group_name = \$condition[\$column . '_group'];
        if (!isset(\$groups[\$column][\$group_name])) {
          \$groups[\$column][\$group_name] = \$table_alias;
        \}
        else {
          \$select_query->where("\$table_alias.\$column = " . \$groups[\$column][\$group_name] . ".\$column");
        \}
      \}
    \}
  \}

  if (isset(\$query->deleted)) {
    \$select_query->condition("\$field_base_table.deleted", (int) \$query->deleted);
  \}

  // Is there a need to sort the query by property?
  \$has_property_order = FALSE;
  foreach (\$query->order as \$order) {
    if (\$order['type'] == 'property') {
      \$has_property_order = TRUE;
    \}
  \}

  if (\$query->propertyConditions || \$has_property_order) {
    if (empty(\$query->entityConditions['entity_type']['value'])) {
      throw new EntityFieldQueryException('Property conditions and orders must have an entity type defined.');
    \}
    \$entity_type = \$query->entityConditions['entity_type']['value'];
    \$entity_base_table = _field_sql_storage_query_join_entity(\$select_query, \$entity_type, \$field_base_table);
    \$query->entityConditions['entity_type']['operator'] = '=';
    foreach (\$query->propertyConditions as \$property_condition) {
      \$query->addCondition(\$select_query, "\$entity_base_table." . \$property_condition['column'], \$property_condition);
    \}
  \}
  foreach (\$query->entityConditions as \$key => \$condition) {
    \$query->addCondition(\$select_query, "\$field_base_table.\$key", \$condition);
  \}

  // Order the query.
  foreach (\$query->order as \$order) {
    if (\$order['type'] == 'entity') {
      \$key = \$order['specifier'];
      \$select_query->orderBy("\$field_base_table.\$key", \$order['direction']);
    \}
    elseif (\$order['type'] == 'field') {
      \$specifier = \$order['specifier'];
      \$field = \$specifier['field'];
      \$table_alias = \$table_aliases[\$specifier['index']];
      \$sql_field = "\$table_alias." . _field_sql_storage_columnname(\$field['field_name'], \$specifier['column']);
      \$select_query->orderBy(\$sql_field, \$order['direction']);
    \}
    elseif (\$order['type'] == 'property') {
      \$select_query->orderBy("\$entity_base_table." . \$order['specifier'], \$order['direction']);
    \}
  \}

  return \$query->finishQuery(\$select_query, \$id_key);}
}

$2