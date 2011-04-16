/**
 * Implements theme_menu_local_task().
 */
function <?php print $basename; ?>_menu_local_task(\$link, \$active = FALSE) {
  ${1:return '<li '. (\$active ? 'class="active" ' : '') .'>'. \$link ."</li>\n";}
}

$2