/**
 * Implements hook_field_available_languages_alter().
 */
function <?php print $basename; ?>_field_available_languages_alter(&\$languages, \$context) {
  ${1:// Add an unavailable language.
  \$languages[] = 'xx';

  // Remove an available language.
  \$index = array_search('yy', \$languages);
  unset(\$languages[\$index]);}
}

$2