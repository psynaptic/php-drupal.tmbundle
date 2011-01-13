/**
 * Return a themed submenu, typically displayed under the tabs.
 *
 * @param \$links
 *   An array of links.
 */
function ${1:phptemplate}_submenu(\$links) {
  return '<div class="submenu">'. implode(' | ', \$links) .'</div>';
}

$2