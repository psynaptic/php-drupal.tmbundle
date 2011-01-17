/**
 * Format the selection field for choosing terms
 * (by default the default selection field is used).
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_taxonomy_term_select(\$element) {
  return theme('select', \$element);
}

$1