/**
 * Implements theme_user_signature().
 */
function <?php print $basename; ?>_user_signature(\$signature) {
  ${1:\$output = '';
  if (\$signature) {
    \$output .= '<div class="clear">';
    \$output .= '<div>—</div>';
    \$output .= \$signature;
    \$output .= '</div>';
  \}

  return \$output;}
}

$2