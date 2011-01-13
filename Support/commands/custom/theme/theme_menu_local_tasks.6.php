/**
 * Returns the rendered local tasks. The default implementation renders them as tabs.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_menu_local_tasks() {
  \$output = '';

  if (\$primary = menu_primary_local_tasks()) {
    \$output .= "<ul class=\"tabs primary\">\n". \$primary ."</ul>\n";
  }
  if (\$secondary = menu_secondary_local_tasks()) {
    \$output .= "<ul class=\"tabs secondary\">\n". \$secondary ."</ul>\n";
  }

  return \$output;
}

$2