/**
 * Implements theme_tablesort_indicator().
 */
function <?php print $basename; ?>_tablesort_indicator(\$variables) {
  ${1:if (\$variables['style'] == "asc") {
    return theme('image', array('path' => 'misc/arrow-asc.png', 'alt' => t('sort ascending'), 'title' => t('sort ascending')));
  \}
  else {
    return theme('image', array('path' => 'misc/arrow-desc.png', 'alt' => t('sort descending'), 'title' => t('sort descending')));
  \}}
}

$2