/**
 * Render a taxonomy term page HTML output.
 *
 * @param \$tids
 *   An array of term ids.
 * @param \$result
 *   A pager_query() result, such as that performed by taxonomy_select_nodes().
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_taxonomy_term_page(\$tids, \$result) {
  drupal_add_css(drupal_get_path('module', 'taxonomy') .'/taxonomy.css');

  \$output = '';

  // Only display the description if we have a single term, to avoid clutter and confusion.
  if (count(\$tids) == 1) {
    \$term = taxonomy_get_term(\$tids[0]);
    \$description = \$term->description;

    // Check that a description is set.
    if (!empty(\$description)) {
      \$output .= '<div class="taxonomy-term-description">';
      \$output .= filter_xss_admin(\$description);
      \$output .= '</div>';
    }
  }

  \$output .= taxonomy_render_nodes(\$result);

  return \$output;
}

$2