/**
 * Implements hook_node_info().
 */
function <?php print $basename; ?>_node_info() {
  ${1:return array(
    'blog' => array(
      'name' => t('Blog entry'),
      'base' => 'blog',
      'description' => t('Use for multi-user blogs. Every user gets a personal blog.'),
    )
  );}
}

$2