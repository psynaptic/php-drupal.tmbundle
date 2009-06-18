/**
 * Returns code that emits the 'more help'-link.
 */
function ${1:phptemplate}_more_help_link(\$url) {
  return '<div class="more-help-link">' . t('[<a href="@link">more help...</a>]', array('@link' => check_url(\$url))) . '</div>';
}

$2