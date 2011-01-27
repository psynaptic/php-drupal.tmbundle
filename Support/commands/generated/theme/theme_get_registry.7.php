/**
 * Implements theme_get_registry().
 */
function <?php print $basename; ?>_get_registry() {
  ${1:static \$theme_registry = NULL;

  if (!isset(\$theme_registry)) {
    list(\$callback, \$arguments) = _theme_registry_callback();
    \$theme_registry = call_user_func_array(\$callback, \$arguments);
  \}

  return \$theme_registry;}
}

$2