/**
 * Implements theme_tablesort_indicator().
 */
function <?php print $basename; ?>_tablesort_indicator(\$style) {
  ${1:if (\$style == "asc") {
    return theme('image', 'misc/arrow-asc.png', t('sort icon'), t('sort ascending'));
  \}
  else {
    return theme('image', 'misc/arrow-desc.png', t('sort icon'), t('sort descending'));
  \}}
}

$2