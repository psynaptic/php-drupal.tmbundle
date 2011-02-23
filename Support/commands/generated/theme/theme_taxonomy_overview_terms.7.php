/**
 * Implements theme_taxonomy_overview_terms().
 */
function <?php print $basename; ?>_taxonomy_overview_terms(\$variables) {
  ${1:\$form = \$variables['form'];

  \$page_increment  = \$form['#page_increment'];
  \$page_entries    = \$form['#page_entries'];
  \$back_step     = \$form['#back_step'];
  \$forward_step  = \$form['#forward_step'];

  // Add drag and drop if parent fields are present in the form.
  if (\$form['#parent_fields']) {
    drupal_add_tabledrag('taxonomy', 'match', 'parent', 'term-parent', 'term-parent', 'term-id', FALSE);
    drupal_add_tabledrag('taxonomy', 'depth', 'group', 'term-depth', NULL, NULL, FALSE);
    drupal_add_js(drupal_get_path('module', 'taxonomy') . '/taxonomy.js');
    drupal_add_js(array('taxonomy' => array('backStep' => \$back_step, 'forwardStep' => \$forward_step)), 'setting');
    drupal_add_css(drupal_get_path('module', 'taxonomy') . '/taxonomy.css');
  \}
  drupal_add_tabledrag('taxonomy', 'order', 'sibling', 'term-weight');

  \$errors = form_get_errors() != FALSE ? form_get_errors() : array();
  \$rows = array();
  foreach (element_children(\$form) as \$key) {
    if (isset(\$form[\$key]['#term'])) {
      \$term = &\$form[\$key];

      \$row = array();
      \$row[] = (isset(\$term['#term']['depth']) && \$term['#term']['depth'] > 0 ? theme('indentation', array('size' => \$term['#term']['depth'])) : ''). drupal_render(\$term['view']);
      if (\$form['#parent_fields']) {
        \$term['tid']['#attributes']['class'] = array('term-id');
        \$term['parent']['#attributes']['class'] = array('term-parent');
        \$term['depth']['#attributes']['class'] = array('term-depth');
        \$row[0] .= drupal_render(\$term['parent']) . drupal_render(\$term['tid']) . drupal_render(\$term['depth']);
      \}
      \$term['weight']['#attributes']['class'] = array('term-weight');
      \$row[] = drupal_render(\$term['weight']);
      \$row[] = drupal_render(\$term['edit']);
      \$row = array('data' => \$row);
      \$rows[\$key] = \$row;
    \}
  \}

  // Add necessary classes to rows.
  \$row_position = 0;
  foreach (\$rows as \$key => \$row) {
    \$rows[\$key]['class'] = array();
    if (isset(\$form['#parent_fields'])) {
      \$rows[\$key]['class'][] = 'draggable';
    \}

    // Add classes that mark which terms belong to previous and next pages.
    if (\$row_position < \$back_step || \$row_position >= \$page_entries - \$forward_step) {
      \$rows[\$key]['class'][] = 'taxonomy-term-preview';
    \}

    if (\$row_position !== 0 && \$row_position !== count(\$rows) - 1) {
      if (\$row_position == \$back_step - 1 || \$row_position == \$page_entries - \$forward_step - 1) {
        \$rows[\$key]['class'][] = 'taxonomy-term-divider-top';
      \}
      elseif (\$row_position == \$back_step || \$row_position == \$page_entries - \$forward_step) {
        \$rows[\$key]['class'][] = 'taxonomy-term-divider-bottom';
      \}
    \}

    // Add an error class if this row contains a form error.
    foreach (\$errors as \$error_key => \$error) {
      if (strpos(\$error_key, \$key) === 0) {
        \$rows[\$key]['class'][] = 'error';
      \}
    \}
    \$row_position++;
  \}

  if (empty(\$rows)) {
    \$rows[] = array(array('data' => \$form['#empty_text'], 'colspan' => '3'));
  \}

  \$header = array(t('Name'), t('Weight'), t('Operations'));
  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'taxonomy')));
  \$output .= drupal_render_children(\$form);
  \$output .= theme('pager');

  return \$output;}
}

$2