/**
 * Implements theme_profile_admin_overview().
 */
function <?php print $basename; ?>_profile_admin_overview(\$variables) {
  ${1:\$form = \$variables['form'];

  drupal_add_css(drupal_get_path('module', 'profile') . '/profile.css');
  // Add javascript if there's more than one field.
  if (isset(\$form['actions'])) {
    drupal_add_js(drupal_get_path('module', 'profile') . '/profile.js');
  \}

  \$rows = array();
  \$categories = array();
  \$category_number = 0;
  foreach (element_children(\$form) as \$key) {
    // Don't take form control structures.
    if (isset(\$form[\$key]['category'])) {
      \$field = &\$form[\$key];
      \$category = \$field['category']['#default_value'];

      if (!isset(\$categories[\$category])) {
        // Category classes are given numeric IDs because there's no guarantee
        // class names won't contain invalid characters.
        \$categories[\$category] = \$category_number;
        \$category_field['#attributes']['class'] = array('profile-category', 'profile-category-' . \$category_number);
        \$rows[] = array(array('data' => check_plain(\$category), 'colspan' => 7, 'class' => array('category')));
        \$rows[] = array('data' => array(array('data' => '<em>' . t('No fields in this category. If this category remains empty when saved, it will be removed.') . '</em>', 'colspan' => 7)), 'class' => array('category-' . \$category_number . '-message', 'category-message', 'category-populated'));

        // Make it draggable only if there is more than one field
        if (isset(\$form['actions'])) {
          drupal_add_tabledrag('profile-fields', 'order', 'sibling', 'profile-weight', 'profile-weight-' . \$category_number);
          drupal_add_tabledrag('profile-fields', 'match', 'sibling', 'profile-category', 'profile-category-' . \$category_number);
        \}
        \$category_number++;
      \}

      // Add special drag and drop classes that group fields together.
      \$field['weight']['#attributes']['class'] = array('profile-weight', 'profile-weight-' . \$categories[\$category]);
      \$field['category']['#attributes']['class'] = array('profile-category', 'profile-category-' . \$categories[\$category]);

      // Add the row
      \$row = array();
      \$row[] = drupal_render(\$field['title']);
      \$row[] = drupal_render(\$field['name']);
      \$row[] = drupal_render(\$field['type']);
      if (isset(\$form['actions'])) {
        \$row[] = drupal_render(\$field['category']);
        \$row[] = drupal_render(\$field['weight']);
      \}
      \$row[] = drupal_render(\$field['edit']);
      \$row[] = drupal_render(\$field['delete']);
      \$rows[] = array('data' => \$row, 'class' => array('draggable'));
    \}
  \}

  \$header = array(t('Title'), t('Name'), t('Type'));
  if (isset(\$form['actions'])) {
    \$header[] = t('Category');
    \$header[] = t('Weight');
  \}
  \$header[] = array('data' => t('Operations'), 'colspan' => 2);

  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'empty' => t('No fields available.'), 'attributes' => array('id' => 'profile-fields')));
  \$output .= drupal_render_children(\$form);

  return \$output;}
}

$2