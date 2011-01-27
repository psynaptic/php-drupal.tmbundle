/**
 * Implements theme_update_manager_update_form().
 */
function <?php print $basename; ?>_update_manager_update_form(\$variables) {
  ${1:\$form = \$variables['form'];
  \$last = variable_get('update_last_check', 0);
  \$output = theme('update_last_check', array('last' => \$last));
  \$output .= drupal_render_children(\$form);
  return \$output;}
}

$2