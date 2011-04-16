/**
 * Implements theme_aggregator_page_rss().
 */
function <?php print $basename; ?>_aggregator_page_rss(\$variables) {
  ${1:\$feeds = \$variables['feeds'];
  \$category = \$variables['category'];

  drupal_add_http_header('Content-Type', 'application/rss+xml; charset=utf-8');

  \$items = '';
  \$feed_length = variable_get('feed_item_length', 'fulltext');
  foreach (\$feeds as \$feed) {
    switch (\$feed_length) {
      case 'teaser':
        \$summary = text_summary(\$feed->description, NULL, variable_get('aggregator_teaser_length', 600));
        if (\$summary != \$feed->description) {
          \$summary .= '<p><a href="' . check_url(\$feed->link) . '">' . t('read more') . "</a></p>\n";
        \}
        \$feed->description = \$summary;
        break;
      case 'title':
        \$feed->description = '';
        break;
    \}
    \$items .= format_rss_item(\$feed->ftitle . ': ' . \$feed->title, \$feed->link, \$feed->description, array('pubDate' => date('r', \$feed->timestamp)));
  \}

  \$site_name = variable_get('site_name', 'Drupal');
  \$url = url((isset(\$category) ? 'aggregator/categories/' . \$category->cid : 'aggregator'), array('absolute' => TRUE));
  \$description = isset(\$category) ? t('@site_name - aggregated feeds in category @title', array('@site_name' => \$site_name, '@title' => \$category->title)) : t('@site_name - aggregated feeds', array('@site_name' => \$site_name));

  \$output  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
  \$output .= "<rss version=\"2.0\">\n";
  \$output .= format_rss_channel(t('@site_name aggregator', array('@site_name' => \$site_name)), \$url, \$description, \$items);
  \$output .= "</rss>\n";

  print \$output;}
}

$2