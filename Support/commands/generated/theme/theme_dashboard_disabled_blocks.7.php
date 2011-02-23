/**
 * Implements theme_dashboard_disabled_blocks().
 */
function <?php print $basename; ?>_dashboard_disabled_blocks(\$variables) {
  ${1:extract(\$variables);
  \$output = '<div class="canvas-content"><p>' . t('Drag and drop these blocks to the columns below. Changes are automatically saved. More options are available on the <a href="@dashboard-url">configuration page</a>.', array('@dashboard-url' => url('admin/dashboard/configure'))) . '</p>';
  \$output .= '<div id="disabled-blocks"><div class="region disabled-blocks clearfix">';
  foreach (\$blocks as \$block) {
    \$output .= theme('dashboard_disabled_block', array('block' => \$block));
  \}
  \$output .= '<div class="clearfix"></div>';
  \$output .= '<p class="dashboard-add-other-blocks">' . l(t('Add other blocks'), 'admin/dashboard/configure') . '</p>';
  \$output .= '</div></div></div>';
  return \$output;}
}

$2