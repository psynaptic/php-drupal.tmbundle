/**
 * Implements hook_date_format_types_alter().
 */
function <?php print $basename; ?>_date_format_types_alter(&\$types) {
  ${1:foreach (\$types as \$name => \$type) {
    \$types[\$name]['locked'] = 1;
  \}}
}

$2