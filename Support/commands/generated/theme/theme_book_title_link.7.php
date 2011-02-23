/**
 * Implements theme_book_title_link().
 */
function <?php print $basename; ?>_book_title_link(\$variables) {
  ${1:\$link = \$variables['link'];

  \$link['options']['attributes']['class'] = array('book-title');

  return l(\$link['title'], \$link['href'], \$link['options']);}
}

$2