/**
 * Implements theme_dashboard_disabled_block().
 */
function <?php print $basename; ?>_dashboard_disabled_block(\$variables) {
  ${1:extract(\$variables);
  \$output = "";
  if (isset(\$block)) {
    \$output .= '<div id="block-' . \$block['module'] . '-' . \$block['delta']
    . '" class="disabled-block block block-' . \$block['module'] . '-' . \$block['delta']
    . ' module-' . \$block['module'] . ' delta-' . \$block['delta'] . '">'
    . '<h2>' . (!empty(\$block['title']) && \$block['title'] != '<none>' ? check_plain(\$block['title']) : check_plain(\$block['info'])) . '</h2>'
    . '<div class="content"></div>'
    . '</div>';
  \}
  return \$output;}
}

$2