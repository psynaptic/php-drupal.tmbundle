/**
 * Implements hook_process().
 */
function <?php print $basename; ?>_process(&\$variables, \$hook) {
  ${1:// Wraps variables in RDF wrappers.
  if (!empty(\$variables['rdf_template_variable_attributes_array'])) {
    foreach (\$variables['rdf_template_variable_attributes_array'] as \$variable_name => \$attributes) {
      \$context = array(
        'hook' => \$hook,
        'variable_name' => \$variable_name,
        'variables' => \$variables,
      );
      \$variables[\$variable_name] = theme('rdf_template_variable_wrapper', array('content' => \$variables[\$variable_name], 'attributes' => \$attributes, 'context' => \$context));
    \}
  \}}
}

$2