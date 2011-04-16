/**
 * Implements theme_dashboard().
 */
function <?php print $basename; ?>_dashboard(\$variables) {
  ${1:extract(\$variables);
  drupal_add_css(drupal_get_path('module', 'dashboard') . '/dashboard.css');
  return '<div id="dashboard" class="clearfix">' . \$element['#children'] . '</div>';}
}

$2