/**
 * Return a themed progress bar.
 *
 * @param \$percent
 *   The percentage of the progress.
 * @param \$message
 *   A string containing information to be displayed.
 * @return
 *   A themed HTML string representing the progress bar.
 */
function ${1:phptemplate}_progress_bar(\$percent, \$message) {
  \$output = '<div id="progress" class="progress">';
  \$output .= '<div class="bar"><div class="filled" style="width: '. \$percent .'%"></div></div>';
  \$output .= '<div class="percentage">'. \$percent .'%</div>';
  \$output .= '<div class="message">'. \$message .'</div>';
  \$output .= '</div>';

  return \$output;
}

$2