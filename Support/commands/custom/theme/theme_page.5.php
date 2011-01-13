/**
 * Return an entire Drupal page displaying the supplied content.
 *
 * @param \$content
 *   A string to display in the main content area of the page.
 * @return
 *   A string containing the entire HTML page.
 */
function ${1:phptemplate}_page(\$content) {
  // Get blocks before so that they can alter the header (JavaScript, Stylesheets etc.)
  \$blocks = theme('blocks', 'all');

  \$output = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
  \$output .= '<html xmlns="http://www.w3.org/1999/xhtml">';
  \$output .= '<head>';
  \$output .= ' <title>'. (drupal_get_title() ? strip_tags(drupal_get_title()) : variable_get('site_name', 'Drupal')) .'</title>';
  \$output .= drupal_get_html_head();
  \$output .= drupal_get_css();
  \$output .= drupal_get_js();

  \$output .= ' </head>';
  \$output .= ' <body style="background-color: #fff; color: #000;">';
  \$output .= '<table border="0" cellspacing="4" cellpadding="4"><tr><td style="vertical-align: top; width: 170px;">';

  \$output .= \$blocks;
  \$output .= '</td><td style="vertical-align: top;">';

  \$output .= theme('breadcrumb', drupal_get_breadcrumb());
  \$output .= '<h1>' . drupal_get_title() . '</h1>';

  if (\$tabs = theme('menu_local_tasks')) {
   \$output .= \$tabs;
  }

  \$output .= theme('help');

  \$output .= theme('status_messages');

  \$output .= "\n<!-- begin content -->\n";
  \$output .= \$content;
  \$output .= drupal_get_feeds();
  \$output .= "\n<!-- end content -->\n";

  \$output .= '</td></tr></table>';
  \$output .= theme('closure');
  \$output .= '</body></html>';

  return \$output;
}

$2