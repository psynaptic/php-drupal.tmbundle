/**
 * Returns code that emits the 'more' link used on blocks.
 *
 * @param \$url
 *   The url of the main page
 * @param \$title
 *   A descriptive verb for the link, like 'Read more'
 */
function theme_more_link(\$url, \$title) {
  return '<div class="more-link">'. t('<a href="@link" title="@title">more</a>', array('@link' => check_url(\$url), '@title' => \$title)) .'</div>';
}

$1