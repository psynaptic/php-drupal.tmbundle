/**
 * Implements theme_menu_local_tasks().
 */
function <?php print $basename; ?>_menu_local_tasks() {
  ${1:\$output = '';

  if (\$primary = menu_primary_local_tasks()) {
    \$output .= "<ul class=\"tabs primary\">\n". \$primary ."</ul>\n";
  \}
  if (\$secondary = menu_secondary_local_tasks()) {
    \$output .= "<ul class=\"tabs secondary\">\n". \$secondary ."</ul>\n";
  \}

  return \$output;}
}

$2