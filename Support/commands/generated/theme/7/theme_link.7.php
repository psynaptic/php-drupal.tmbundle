/**
 * Implements theme_link().
 */
function <?php print $basename; ?>_link(\$variables) {
  ${1:return '<a href="' . check_plain(url(\$variables['path'], \$variables['options'])) . '"' . drupal_attributes(\$variables['options']['attributes']) . '>' . (\$variables['options']['html'] ? \$variables['text'] : check_plain(\$variables['text'])) . '</a>';}
}

$2