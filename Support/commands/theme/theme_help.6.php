/**
 * Return a themed help message.
 *
 * @return a string containing the helptext for the current page.
 */
function ${1:phptemplate}_help() {
  if (\$help = menu_get_active_help()) {
    return '<div class="help">'. \$help .'</div>';
  }
}

$2