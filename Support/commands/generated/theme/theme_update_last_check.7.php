/**
 * Implements theme_update_last_check().
 */
function <?php print $basename; ?>_update_last_check(\$variables) {
  ${1:\$last = \$variables['last'];
  \$output = '<div class="update checked">';
  \$output .= \$last ? t('Last checked: @time ago', array('@time' => format_interval(REQUEST_TIME - \$last))) : t('Last checked: never');
  \$output .= ' <span class="check-manually">(' . l(t('Check manually'), 'admin/reports/updates/check', array('query' => drupal_get_destination())) . ')</span>';
  \$output .= "</div>\n";
  return \$output;}
}

$2