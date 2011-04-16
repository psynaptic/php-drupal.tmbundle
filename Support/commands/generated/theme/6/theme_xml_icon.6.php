/**
 * Implements theme_xml_icon().
 */
function <?php print $basename; ?>_xml_icon(\$url) {
  ${1:if (\$image = theme('image', 'misc/xml.png', t('XML feed'), t('XML feed'))) {
    return '<a href="'. check_url(\$url) .'" class="xml-icon">'. \$image .'</a>';
  \}}
}

$2