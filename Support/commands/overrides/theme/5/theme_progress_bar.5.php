/**
 * Return a themed progress bar.
 *
 * @param $percent
 *   The percentage of the progress.
 * @param $message
 *   A string containing information to be displayed.
 * @return
 *   A themed HTML string representing the progress bar.
 */
function <?php print $basename; ?>_progress_bar(\$percent, \$message) {
  \$output = '<div id="progress" class="progress">';
  \$output .= '<div class="percentage">'. \$percent .'%</div>';
  \$output .= '<div class="status">'. \$message .'</div>';
  \$output .= '<div class="bar"><div class="filled" style="width: '. \$percent .'%"></div></div>';
  \$output .= '</div>';

  return \$output;
}

$1