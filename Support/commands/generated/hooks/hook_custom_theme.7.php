/**
 * Implements hook_custom_theme().
 */
function <?php print $basename; ?>_custom_theme() {
  ${1:// Allow the user to request a particular theme via a query parameter.
  if (isset(\$_GET['theme'])) {
    return \$_GET['theme'];
  \}}
}

$2