/**
 * Implements theme_pager_link().
 */
function <?php print $basename; ?>_pager_link(\$text, \$page_new, \$element, \$parameters = array(), \$attributes = array()) {
  ${1:\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';
  if (\$new_page = implode(',', pager_load_array(\$page_new[\$element], \$element, explode(',', \$page)))) {
    \$parameters['page'] = \$new_page;
  \}

  \$query = array();
  if (count(\$parameters)) {
    \$query[] = drupal_query_string_encode(\$parameters, array());
  \}
  \$querystring = pager_get_querystring();
  if (\$querystring != '') {
    \$query[] = \$querystring;
  \}

  // Set each pager link title
  if (!isset(\$attributes['title'])) {
    static \$titles = NULL;
    if (!isset(\$titles)) {
      \$titles = array(
        t('« first') => t('Go to first page'),
        t('‹ previous') => t('Go to previous page'),
        t('next ›') => t('Go to next page'),
        t('last »') => t('Go to last page'),
      );
    \}
    if (isset(\$titles[\$text])) {
      \$attributes['title'] = \$titles[\$text];
    \}
    else if (is_numeric(\$text)) {
      \$attributes['title'] = t('Go to page @number', array('@number' => \$text));
    \}
  \}

  return l(\$text, \$_GET['q'], array('attributes' => \$attributes, 'query' => count(\$query) ? implode('&', \$query) : NULL));}
}

$2