/**
 * Implements theme_progress_bar().
 */
function <?php print $basename; ?>_progress_bar(\$variables) {
  ${1:\$output = '<div id="progress" class="progress">';
  \$output .= '<div class="bar"><div class="filled" style="width: ' . \$variables['percent'] . '%"></div></div>';
  \$output .= '<div class="percentage">' . \$variables['percent'] . '%</div>';
  \$output .= '<div class="message">' . \$variables['message'] . '</div>';
  \$output .= '</div>';

  return \$output;}
}

$2