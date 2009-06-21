/**
 * Theme the vocabulary overview as a sortable list of vocabularies.
 *
 * @ingroup themeable
 * @see taxonomy_overview_vocabularies()
 */
function ${1:phptemplate}_taxonomy_overview_vocabularies(\$form) {
  \$rows = array();
  foreach (element_children(\$form) as \$key) {
    if (isset(\$form[\$key]['name'])) {
      \$vocabulary = &\$form[\$key];

      \$row = array();
      \$row[] = drupal_render(\$vocabulary['name']);
      \$row[] = drupal_render(\$vocabulary['types']);
      if (isset(\$vocabulary['weight'])) {
        \$vocabulary['weight']['#attributes']['class'] = 'vocabulary-weight';
        \$row[] = drupal_render(\$vocabulary['weight']);
      }
      \$row[] = drupal_render(\$vocabulary['edit']);
      \$row[] = drupal_render(\$vocabulary['list']);
      \$row[] = drupal_render(\$vocabulary['add']);
      \$rows[] = array('data' => \$row, 'class' => 'draggable');
    }
  }
  if (empty(\$rows)) {
    \$rows[] = array(array('data' => t('No vocabularies available.'), 'colspan' => '5'));
  }

  \$header = array(t('Name'), t('Type'));
  if (isset(\$form['submit'])) {
    \$header[] = t('Weight');
    drupal_add_tabledrag('taxonomy', 'order', 'sibling', 'vocabulary-weight');
  }
  \$header[] = array('data' => t('Operations'), 'colspan' => '3');
  return theme('table', \$header, \$rows, array('id' => 'taxonomy')) . drupal_render(\$form);
}

$2