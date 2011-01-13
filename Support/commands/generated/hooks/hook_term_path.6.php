/**
 * Implements hook_term_path().
 */
function <?php print $basename; ?>_term_path(\$term) {
  ${1:return 'taxonomy/term/'. \$term->tid;}
}

$2