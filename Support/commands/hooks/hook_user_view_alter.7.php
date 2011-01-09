/**
 * Implements hook_user_view_alter().
 */
function <?php print $basename; ?>_user_view_alter(&\$build) {
  ${1:// Check for the existence of a field added by another module.
  if (isset(\$build['an_additional_field'])) {
    // Change its weight.
    \$build['an_additional_field']['#weight'] = -10;
  \}

  // Add a #post_render callback to act on the rendered HTML of the user.
  \$build['#post_render'][] = 'my_module_user_post_render';}
}

$2