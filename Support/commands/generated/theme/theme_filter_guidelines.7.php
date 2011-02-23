/**
 * Implements theme_filter_guidelines().
 */
function <?php print $basename; ?>_filter_guidelines(\$variables) {
  ${1:\$format = \$variables['format'];
  \$attributes['class'][] = 'filter-guidelines-item';
  \$attributes['class'][] = 'filter-guidelines-' . \$format->format;
  \$output = '<div' . drupal_attributes(\$attributes) . '>';
  \$output .= '<h3>' . check_plain(\$format->name) . '</h3>';
  \$output .= theme('filter_tips', array('tips' => _filter_tips(\$format->format, FALSE)));
  \$output .= '</div>';
  return \$output;}
}

$2