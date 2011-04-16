/**
 * Implements theme_simpletest_result_summary().
 */
function <?php print $basename; ?>_simpletest_result_summary(\$variables) {
  ${1:\$form = \$variables['form'];
  return '<div class="simpletest-' . (\$form['#ok'] ? 'pass' : 'fail') . '">' . _simpletest_format_summary_line(\$form) . '</div>';}
}

$2