/**
 * Implements theme_breadcrumb().
 */
function <?php print $basename; ?>_breadcrumb(\$variables) {
  ${1:\$breadcrumb = \$variables['breadcrumb'];

  if (!empty(\$breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    \$output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    \$output .= '<div class="breadcrumb">' . implode(' » ', \$breadcrumb) . '</div>';
    return \$output;
  \}}
}

$2