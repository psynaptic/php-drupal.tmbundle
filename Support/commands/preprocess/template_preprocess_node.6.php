/**
 * Override or insert variables into the node templates.
 *
 * @param \$variables
 *   An array of variables to pass to the theme template.
 * @param \$hook
 *   The name of the template being rendered ("node" in this case.)
 */
function ${1:phptemplate}_preprocess_node(&\$variables, \$hook) {
  ${2:\$node = \$variables['node'];}$3
}

$4