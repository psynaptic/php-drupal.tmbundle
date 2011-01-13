/**
 * Implements hook_language_init().
 */
function <?php print $basename; ?>_language_init() {
  ${1:global \$language, \$conf;

  switch (\$language->language) {
    case 'it':
      \$conf['site_name'] = 'Il mio sito Drupal';
      break;

    case 'fr':
      \$conf['site_name'] = 'Mon site Drupal';
      break;
  \}}
}

$2