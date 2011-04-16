/**
 * Implements hook_themes_enabled().
 */
function <?php print $basename; ?>_themes_enabled(\$theme_list) {
  ${1:foreach (\$theme_list as \$theme) {
    block_theme_initialize(\$theme);
  \}}
}

$2