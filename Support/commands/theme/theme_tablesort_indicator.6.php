/**
 * Return a themed sort icon.
 *
 * @param \$style
 *   Set to either asc or desc. This sets which icon to show.
 * @return
 *   A themed sort icon.
 */
function theme_tablesort_indicator(\$style) {
  if (\$style == "asc") {
    return theme('image', 'misc/arrow-asc.png', t('sort icon'), t('sort ascending'));
  }
  else {
    return theme('image', 'misc/arrow-desc.png', t('sort icon'), t('sort descending'));
  }
}

$1