/**
 * Implements theme_progress_bar().
 */
function <?php print $basename; ?>_progress_bar(\$percent, \$message) {
  ${1:\$output = '<div id="progress" class="progress">';
  \$output .= '<div class="bar"><div class="filled" style="width: '. \$percent .'%"></div></div>';
  \$output .= '<div class="percentage">'. \$percent .'%</div>';
  \$output .= '<div class="message">'. \$message .'</div>';
  \$output .= '</div>';

  return \$output;}
}

$2