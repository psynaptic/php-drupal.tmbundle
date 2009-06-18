/**
 * Return a themed submenu, typically displayed under the tabs.
 *
 * @param \$links
 *   An array of links.
 */
function theme_submenu(\$links) {
  return '<div class="submenu">'. implode(' | ', \$links) .'</div>';
}

$1