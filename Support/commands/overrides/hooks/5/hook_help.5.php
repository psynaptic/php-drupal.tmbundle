/**
 * Implements hook_help().
 */
function <?php print $basename; ?>_help(\$section) {
  switch (\$section) {
    case 'admin/help#<?php print $basename; ?>':
      return ${1:'<p>'. t('$2') .'</p>'};
  }$3
}

$4