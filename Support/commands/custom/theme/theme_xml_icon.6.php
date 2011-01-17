/**
 * Return code that emits an XML icon.
 *
 * For most use cases, this function has been superseded by theme_feed_icon().
 *
 * @see theme_feed_icon()
 * @param \$url
 *   The url of the feed.
 */
function <?php print $basename; ?>_xml_icon(\$url) {
  if (\$image = theme('image', 'misc/xml.png', t('XML feed'), t('XML feed'))) {
    return '<a href="'. check_url(\$url) .'" class="xml-icon">'. \$image .'</a>';
  }
}

$1