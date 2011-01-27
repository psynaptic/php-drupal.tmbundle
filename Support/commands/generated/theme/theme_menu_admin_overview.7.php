/**
 * Implements theme_menu_admin_overview().
 */
function <?php print $basename; ?>_menu_admin_overview(\$variables) {
  ${1:\$output = check_plain(\$variables['title']);
  \$output .= '<div class="description">' . filter_xss_admin(\$variables['description']) . '</div>';

  return \$output;}
}

$2