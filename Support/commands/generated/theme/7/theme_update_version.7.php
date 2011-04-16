/**
 * Implements theme_update_version().
 */
function <?php print $basename; ?>_update_version(\$variables) {
  ${1:\$version = \$variables['version'];
  \$tag = \$variables['tag'];
  \$class = implode(' ', \$variables['class']);

  \$output = '';
  \$output .= '<table class="version ' . \$class . '">';
  \$output .= '<tr>';
  \$output .= '<td class="version-title">' . \$tag . "</td>\n";
  \$output .= '<td class="version-details">';
  \$output .= l(\$version['version'], \$version['release_link']);
  \$output .= ' <span class="version-date">(' . format_date(\$version['date'], 'custom', 'Y-M-d') . ')</span>';
  \$output .= "</td>\n";
  \$output .= '<td class="version-links">';
  \$links = array();
  \$links['update-download'] = array(
    'title' => t('Download'),
    'href' => \$version['download_link'],
  );
  \$links['update-release-notes'] = array(
    'title' => t('Release notes'),
    'href' => \$version['release_link'],
  );
  \$output .= theme('links__update_version', array('links' => \$links));
  \$output .= '</td>';
  \$output .= '</tr>';
  \$output .= "</table>\n";
  return \$output;}
}

$2