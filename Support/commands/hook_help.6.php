/**
 * Implementation of hook_help().
 */
function <?php print $basename; ?>_help(\$path, \$arg) {
  switch (\$path) {
    case 'admin/help#${1:<?php print $basename; ?>}':
      return ${2:'<p>'. t('$3') .'</p>'};
  }$4
}

$5