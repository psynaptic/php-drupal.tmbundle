/**
 * Override or insert variables into the node templates.
 *
 * @param \$vars
 *   An array of variables to pass to the theme template.
 * @param \$hook
 *   The name of the template being rendered ("node" in this case.)
 */
function ${1:phptemplate}_preprocess_node(&\$vars, \$hook) {
  ${2:\$node = \$vars['node'];}$3
}

$4