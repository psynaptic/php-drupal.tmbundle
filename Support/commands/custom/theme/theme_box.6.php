/**
 * Return a themed box.
 *
 * @param \$title
 *   The subject of the box.
 * @param \$content
 *   The content of the box.
 * @param \$region
 *   The region in which the box is displayed.
 * @return
 *   A string containing the box output.
 */
function <?php print $basename; ?>_box(\$title, \$content, \$region = 'main') {
  \$output = '<h2 class="title">'. \$title .'</h2><div>'. \$content .'</div>';
  return \$output;
}

$1