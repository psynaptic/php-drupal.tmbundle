/**
 * Implements hook_taxonomy().
 */
function <?php print $basename; ?>_taxonomy(\$op, \$type, \$array = NULL) {
  if (\$type == 'vocabulary' && (\$op == 'insert' || \$op == 'update')) {
    ${1:// Codes goes here}
  }
}

$2