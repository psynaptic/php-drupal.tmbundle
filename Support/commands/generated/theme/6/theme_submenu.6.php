/**
 * Implements theme_submenu().
 */
function <?php print $basename; ?>_submenu(\$links) {
  ${1:return '<div class="submenu">'. implode(' | ', \$links) .'</div>';}
}

$2