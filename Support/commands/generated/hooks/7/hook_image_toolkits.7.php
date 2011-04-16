/**
 * Implements hook_image_toolkits().
 */
function <?php print $basename; ?>_image_toolkits() {
  ${1:return array(
    'working' => array(
      'title' => t('A toolkit that works.'),
      'available' => TRUE,
    ),
    'broken' => array(
      'title' => t('A toolkit that is "broken" and will not be listed.'),
      'available' => FALSE,
    ),
  );}
}

$2