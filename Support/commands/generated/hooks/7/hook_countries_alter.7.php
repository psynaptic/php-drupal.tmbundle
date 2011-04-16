/**
 * Implements hook_countries_alter().
 */
function <?php print $basename; ?>_countries_alter(&\$countries) {
  ${1:// Elbonia is now independent, so add it to the country list.
  \$countries['EB'] = 'Elbonia';}
}

$2