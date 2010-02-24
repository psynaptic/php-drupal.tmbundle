/**
 * Override or insert variables into the comment templates.
 *
 * @param \$variables
 *   An array of variables to pass to the theme template.
 * @param \$hook
 *   The name of the template being rendered ("comment" in this case.)
 */
function ${1:phptemplate}_preprocess_comment(&\$variables, \$hook) {
  \$comment = \$variables['comment'];$2
}

$3