/**
 * Implements hook_archiver_info_alter().
 */
function <?php print $basename; ?>_archiver_info_alter(&\$info) {
  ${1:\$info['tar']['extensions'][] = 'tgz';}
}

$2