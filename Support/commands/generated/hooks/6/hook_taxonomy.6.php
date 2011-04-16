/**
 * Implements hook_taxonomy().
 */
function <?php print $basename; ?>_taxonomy(\$op, \$type, \$array = NULL) {
  ${1:if (\$type == 'vocabulary' && (\$op == 'insert' || \$op == 'update')) {
    if (variable_get('forum_nav_vocabulary', '') == ''
        && in_array('forum', \$array['nodes'])) {
      // since none is already set, silently set this vocabulary as the
      // navigation vocabulary
      variable_set('forum_nav_vocabulary', \$array['vid']);
    \}
  \}}
}

$2