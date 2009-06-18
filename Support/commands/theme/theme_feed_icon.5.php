/**
 * Return code that emits an feed icon.
 */
function ${1:<?php print $basename; ?>}_feed_icon(\$url) {
  if (\$image = theme('image', 'misc/feed.png', t('Syndicate content'), t('Syndicate content'))) {
    return '<a href="'. check_url(\$url) .'" class="feed-icon">'. \$image. '</a>';
  }
}

$2