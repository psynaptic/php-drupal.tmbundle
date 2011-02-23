/**
 * Implements theme_dashboard_region().
 */
function <?php print $basename; ?>_dashboard_region(\$variables) {
  ${1:extract(\$variables);
  \$output = '<div id="' . \$element['#dashboard_region'] . '" class="dashboard-region">';
  \$output .= '<div class="region clearfix">';
  \$output .= \$element['#children'];
  // Closing div.region
  \$output .= '</div>';
  // Closing div.dashboard-region
  \$output .= '</div>';
  return \$output;}
}

$2