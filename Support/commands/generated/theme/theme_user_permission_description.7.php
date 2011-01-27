/**
 * Implements theme_user_permission_description().
 */
function <?php print $basename; ?>_user_permission_description(\$variables) {
  ${1:if (!\$variables['hide']) {
    \$description = array();
    \$permission_item = \$variables['permission_item'];
    if (!empty(\$permission_item['description'])) {
      \$description[] = \$permission_item['description'];
    \}
    if (!empty(\$permission_item['warning'])) {
      \$description[] = '<em class="permission-warning">' . \$permission_item['warning'] . '</em>';
    \}
    if (!empty(\$description)) {
      return implode(' ', \$description);
    \}
  \}}
}

$2