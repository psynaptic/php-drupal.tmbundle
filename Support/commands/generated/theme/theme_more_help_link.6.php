/**
 * Implements theme_more_help_link().
 */
function <?php print $basename; ?>_more_help_link(\$url) {
  ${1:return '<div class="more-help-link">'. t('[<a href="@link">more help...</a>]', array('@link' => check_url(\$url))) .'</div>';}
}

$2