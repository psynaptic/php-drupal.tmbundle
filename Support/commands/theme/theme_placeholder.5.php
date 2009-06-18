/**
 * Formats text for emphasized display in a placeholder inside a sentence.
 * Used automatically by t().
 *
 * @param \$text
 *   The text to format (plain-text).
 * @return
 *   The formatted text (html).
 */
function ${1:phptemplate}_placeholder(\$text) {
  return '<em>'. check_plain(\$text) .'</em>';
}

$2