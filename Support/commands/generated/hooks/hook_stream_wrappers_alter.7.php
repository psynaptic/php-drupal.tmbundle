/**
 * Implements hook_stream_wrappers_alter().
 */
function <?php print $basename; ?>_stream_wrappers_alter(&\$wrappers) {
  ${1:// Change the name of private files to reflect the performance.
  \$wrappers['private']['name'] = t('Slow files');}
}

$2