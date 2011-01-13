/**
 * Implements hook_language_fallback_candidates_alter().
 */
function <?php print $basename; ?>_language_fallback_candidates_alter(array &\$fallback_candidates) {
  ${1:\$fallback_candidates = array_reverse(\$fallback_candidates);}
}

$2