/**
 * Implements theme_file_formatter_table().
 */
function <?php print $basename; ?>_file_formatter_table(\$variables) {
  ${1:\$header = array(t('Attachment'), t('Size'));
  \$rows = array();
  foreach (\$variables['items'] as \$delta => \$item) {
    \$rows[] = array(
      theme('file_link', array('file' => (object) \$item)),
      format_size(\$item['filesize']),
    );
  \}

  return empty(\$rows) ? '' : theme('table', array('header' => \$header, 'rows' => \$rows));}
}

$2