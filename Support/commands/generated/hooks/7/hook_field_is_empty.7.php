/**
 * Implements hook_field_is_empty().
 */
function <?php print $basename; ?>_field_is_empty(\$item, \$field) {
  ${1:if (empty(\$item['value']) && (string) \$item['value'] !== '0') {
    return TRUE;
  \}
  return FALSE;}
}

$2