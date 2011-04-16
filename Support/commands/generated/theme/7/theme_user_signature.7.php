/**
 * Implements theme_user_signature().
 */
function <?php print $basename; ?>_user_signature(\$variables) {
  ${1:\$signature = \$variables['signature'];
  \$output = '';

  if (\$signature) {
    \$output .= '<div class="clear">';
    \$output .= '<div>—</div>';
    \$output .= \$signature;
    \$output .= '</div>';
  \}

  return \$output;}
}

$2