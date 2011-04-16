/**
 * Implements theme_box().
 */
function <?php print $basename; ?>_box(\$title, \$content, \$region = 'main') {
  ${1:\$output = '<h2 class="title">'. \$title .'</h2><div>'. \$content .'</div>';
  return \$output;}
}

$2