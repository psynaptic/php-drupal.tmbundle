/**
 * Returns the themed HTML for primary and secondary links.
 * Note that this function is overridden by most core themes because
 * those themes display links in "link | link" format, not from a list.
 * Also note that by default links rendered with this function are
 * displayed with the same CSS as is used for the local tasks.
 * If a theme wishes to render links from a ul it is expected that
 * the theme will provide suitable CSS.
 *
 * @param \$links
 *   An array containing links to render.
 * @return
 *   A string containing the themed links.
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_menu_links(\$links) {
  if (!count(\$links)) {
    return '';
  }
  \$level_tmp = explode('-', key(\$links));
  \$level = \$level_tmp[0];
  \$output = "<ul class=\"links-\$level\">\n";
  foreach (\$links as \$index => \$link) {
    \$output .= '<li';
    if (stristr(\$index, 'active')) {
      \$output .= ' class="active"';
    }
    \$output .= ">". l(\$link['title'], \$link['href'], \$link['attributes'], \$link['query'], \$link['fragment']) ."</li>\n";
  }
  \$output .= '</ul>';

  return \$output;
}

$1