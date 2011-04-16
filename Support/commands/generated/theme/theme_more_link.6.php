/**
 * Implements theme_more_link().
 */
function <?php print $basename; ?>_more_link(\$url, \$title) {
  ${1:return '<div class="more-link">'. t('<a href="@link" title="@title">more</a>', array('@link' => check_url(\$url), '@title' => \$title)) .'</div>';}
}

$2