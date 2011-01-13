/**
 * Implements hook_link().
 */
function <?php print $basename; ?>_link(\$type, \$object, \$teaser = FALSE) {
  ${1:\$links = array();

  if (\$type == 'node' && isset(\$object->parent)) {
    if (!\$teaser) {
      if (book_access('create', \$object)) {
        \$links['book_add_child'] = array(
          'title' => t('add child page'),
          'href' => "node/add/book/parent/\$object->nid",
        );
      \}
      if (user_access('see printer-friendly version')) {
        \$links['book_printer'] = array(
          'title' => t('printer-friendly version'),
          'href' => 'book/export/html/'. \$object->nid,
          'attributes' => array('title' => t('Show a printer-friendly version of this book page and its sub-pages.'))
        );
      \}
    \}
  \}

  \$links['sample_link'] = array(
    'title' => t('go somewhere'),
    'href' => 'node/add',
    'query' => 'foo=bar',
    'fragment' => 'anchorname',
    'attributes' => array('title' => t('go to another page')),
  );

  // Example of a link that's not an anchor
  if (\$type == 'video') {
    if (variable_get('video_playcounter', 1) && user_access('view play counter')) {
      \$links['play_counter'] = array(
        'title' => format_plural(\$object->play_counter, '1 play', '@count plays'),
      );
    \}
  \}

  return \$links;}
}

$2