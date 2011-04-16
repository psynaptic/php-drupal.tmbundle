function <?php print $basename; ?>_maintenance_page(\$content, \$messages = TRUE, \$partial = FALSE) {
  drupal_set_header('Content-Type: text/html; charset=utf-8');
  drupal_set_html_head('<style type="text/css" media="all">@import "'. base_path() .'misc/maintenance.css";</style>');
  drupal_set_html_head('<style type="text/css" media="all">@import "'. base_path() . drupal_get_path('module', 'system') .'/defaults.css";</style>');
  drupal_set_html_head('<style type="text/css" media="all">@import "'. base_path() . drupal_get_path('module', 'system') .'/system.css";</style>');
  drupal_set_html_head('<link rel="shortcut icon" href="'. base_path() .'misc/favicon.ico" type="image/x-icon" />');

  \$output = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
  \$output .= '<html xmlns="http://www.w3.org/1999/xhtml">';
  \$output .= '<head>';
  \$output .= ' <title>'. strip_tags(drupal_get_title()) .'</title>';
  \$output .= drupal_get_html_head();
  \$output .= drupal_get_js();
  \$output .= '</head>';
  \$output .= '<body>';
  \$output .= '<h1>' . drupal_get_title() . '</h1>';

  if (\$messages) {
    \$output .= theme('status_messages');
  }

  \$output .= "\n<!-- begin content -->\n";
  \$output .= \$content;
  \$output .= "\n<!-- end content -->\n";

  if (!\$partial) {
    \$output .= '</body></html>';
  }

  return \$output;
}

$1