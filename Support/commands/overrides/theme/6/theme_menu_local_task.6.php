/**
 * Generate the HTML output for a single local task link.
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_menu_local_task(\$link, \$active = FALSE) {
  return '<li '. (\$active ? 'class="active" ' : '') .'>'. \$link ."</li>\n";
}

$1