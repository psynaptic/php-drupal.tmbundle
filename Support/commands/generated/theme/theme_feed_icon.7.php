/**
 * Implements theme_feed_icon().
 */
function <?php print $basename; ?>_feed_icon(\$variables) {
  ${1:\$text = t('Subscribe to @feed-title', array('@feed-title' => \$variables['title']));
  if (\$image = theme('image', array('path' => 'misc/feed.png', 'alt' => \$text))) {
    return l(\$image, \$variables['url'], array('html' => TRUE, 'attributes' => array('class' => array('feed-icon'), 'title' => \$text)));
  \}}
}

$2