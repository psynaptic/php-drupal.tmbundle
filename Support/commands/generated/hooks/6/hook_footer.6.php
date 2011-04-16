/**
 * Implements hook_footer().
 */
function <?php print $basename; ?>_footer(\$main = 0) {
  ${1:if (variable_get('dev_query', 0)) {
    return '<div style="clear:both;">'. devel_query_table() .'</div>';
  \}}
}

$2