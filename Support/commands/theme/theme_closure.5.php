/**
 * Execute hook_footer() which is run at the end of the page right before the
 * close of the body tag.
 *
 * @param \$main (optional)
 *   Whether the current page is the front page of the site.
 * @return
 *   A string containing the results of the hook_footer() calls.
 */
function ${1:phptemplate}_closure(\$main = 0) {
  \$footer = module_invoke_all('footer', \$main);
  return implode("\n", \$footer) . drupal_get_js('footer');
}

$2