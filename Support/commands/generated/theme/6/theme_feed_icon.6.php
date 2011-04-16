/**
 * Implements theme_feed_icon().
 */
function <?php print $basename; ?>_feed_icon(\$url, \$title) {
  ${1:if (\$image = theme('image', 'misc/feed.png', t('Syndicate content'), \$title)) {
    return '<a href="'. check_url(\$url) .'" class="feed-icon">'. \$image .'</a>';
  \}}
}

$2