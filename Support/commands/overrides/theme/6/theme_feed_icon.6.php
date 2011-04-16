/**
 * Return code that emits an feed icon.
 *
 * @param \$url
 *   The url of the feed.
 * @param \$title
 *   A descriptive title of the feed.
  */
function <?php print $basename; ?>_feed_icon(\$url, \$title) {
  if (\$image = theme('image', 'misc/feed.png', t('Syndicate content'), \$title)) {
    return '<a href="'. check_url(\$url) .'" class="feed-icon">'. \$image .'</a>';
  }
}

$1