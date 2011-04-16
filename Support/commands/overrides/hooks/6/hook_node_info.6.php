/**
 * Implements hook_node_info().
 */
function <?php print $basename; ?>_node_info() {
  return array(
    '<?php print $basename; ?>' => array(
      'name' => t('${1:<?php print ucfirst($basename); ?>}'),
      'module' => '${2:<?php print $basename; ?>}',
      'description' => t('${3:A <?php print $basename; ?> is a pretty simple content type that just works.}'),$4
    ),$5
  );
}

$6