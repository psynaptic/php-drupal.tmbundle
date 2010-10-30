/**
 * Implements hook_help().
 */
function <?php print $basename; ?>_help(\$section) {
  switch (\$section) {
    case 'admin/help#${1:<?php print $basename; ?>}':
      return ${2:'<p>'. t('$3') .'</p>'};
  }$4
}

$5