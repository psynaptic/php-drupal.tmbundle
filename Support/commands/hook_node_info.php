/**
 * Implementation of hook_node_info().
 */
function <?php print $basename; ?>_node_info() {
  return array(
    '${1:<?php print $basename; ?>}' => array(
      'name' => t('${2:<?php print $basename_safe ?>}'),
      'module' => '${3:<?php print $basename; ?>}',
      'description' => t('${4:A <?php print $basename; ?> is a pretty simple content type that just works.}'),$5
    ),$6
  );
}

$7