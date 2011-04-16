/**
 * Implements theme_node_admin_overview().
 */
function <?php print $basename; ?>_node_admin_overview(\$variables) {
  ${1:\$name = \$variables['name'];
  \$type = \$variables['type'];

  \$output = check_plain(\$name);
  \$output .= ' <small> (Machine name: ' . check_plain(\$type->type) . ')</small>';
  \$output .= '<div class="description">' . filter_xss_admin(\$type->description) . '</div>';
  return \$output;}
}

$2