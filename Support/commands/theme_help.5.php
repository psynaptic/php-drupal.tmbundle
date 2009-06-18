/**
 * Return a themed help message.
 *
 * @return a string containing the helptext for the current page.
 */
function theme_help() {
  if (\$help = menu_get_active_help()) {
    return '<div class="help">'. \$help .'</div>';
  }
}

$1