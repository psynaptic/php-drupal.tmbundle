/**
 * Implements theme_help().
 */
function <?php print $basename; ?>_help() {
  ${1:if (\$help = menu_get_active_help()) {
    return '<div class="help">'. \$help .'</div>';
  \}}
}

$2