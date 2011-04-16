/**
 * Implements hook_image_default_styles().
 */
function <?php print $basename; ?>_image_default_styles() {
  ${1:\$styles = array();

  \$styles['mymodule_preview'] = array(
    'effects' => array(
      array(
        'name' => 'image_scale',
        'data' => array('width' => 400, 'height' => 400, 'upscale' => 1),
        'weight' => 0,
      ),
      array(
        'name' => 'image_desaturate',
        'data' => array(),
        'weight' => 1,
      ),
    ),
  );

  return \$styles;}
}

$2