/**
 * Implements theme_aggregator_page_opml().
 */
function <?php print $basename; ?>_aggregator_page_opml(\$variables) {
  ${1:\$feeds = \$variables['feeds'];

  drupal_add_http_header('Content-Type', 'text/xml; charset=utf-8');

  \$output  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
  \$output .= "<opml version=\"1.1\">\n";
  \$output .= "<head>\n";
  \$output .= '<title>' . check_plain(variable_get('site_name', 'Drupal')) . "</title>\n";
  \$output .= '<dateModified>' . gmdate(DATE_RFC2822, REQUEST_TIME) . "</dateModified>\n";
  \$output .= "</head>\n";
  \$output .= "<body>\n";
  foreach (\$feeds as \$feed) {
    \$output .= '<outline text="' . check_plain(\$feed->title) . '" xmlUrl="' . check_url(\$feed->url) . "\" />\n";
  \}
  \$output .= "</body>\n";
  \$output .= "</opml>\n";

  print \$output;}
}

$2