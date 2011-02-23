/**
 * Implements theme_render_template().
 */
function <?php print $basename; ?>_render_template(\$template_file, \$variables) {
  ${1:extract(\$variables, EXTR_SKIP);               // Extract the variables to a local namespace
  ob_start();                                   // Start output buffering
  include DRUPAL_ROOT . '/' . \$template_file;   // Include the template file
  return ob_get_clean();                        // End buffering and return its contents}
}

$2