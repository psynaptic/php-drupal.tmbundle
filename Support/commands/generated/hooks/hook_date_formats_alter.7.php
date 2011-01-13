/**
 * Implements hook_date_formats_alter().
 */
function <?php print $basename; ?>_date_formats_alter(&\$formats) {
  ${1:foreach (\$formats as \$id => \$format) {
    \$formats[\$id]['locales'][] = 'en-ca';
  \}}
}

$2