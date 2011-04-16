/**
 * Implements theme_more_link().
 */
function <?php print $basename; ?>_more_link(\$variables) {
  ${1:return '<div class="more-link">' . l(t('More'), \$variables['url'], array('attributes' => array('title' => \$variables['title']))) . '</div>';}
}

$2