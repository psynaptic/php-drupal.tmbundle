/**
 * Implements theme_closure().
 */
function <?php print $basename; ?>_closure(\$main = 0) {
  ${1:\$footer = module_invoke_all('footer', \$main);
  return implode("\n", \$footer) . drupal_get_js('footer');}
}

$2