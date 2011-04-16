/**
 * Implements hook_theme().
 */
function <?php print $basename; ?>_theme(\$existing, \$type, \$theme, \$path) {
  ${1:return array(
    'forum_display' => array(
      'arguments' => array('forums' => NULL, 'topics' => NULL, 'parents' => NULL, 'tid' => NULL, 'sortby' => NULL, 'forum_per_page' => NULL),
    ),
    'forum_list' => array(
      'arguments' => array('forums' => NULL, 'parents' => NULL, 'tid' => NULL),
    ),
    'forum_topic_list' => array(
      'arguments' => array('tid' => NULL, 'topics' => NULL, 'sortby' => NULL, 'forum_per_page' => NULL),
    ),
    'forum_icon' => array(
      'arguments' => array('new_posts' => NULL, 'num_posts' => 0, 'comment_mode' => 0, 'sticky' => 0),
    ),
    'forum_topic_navigation' => array(
      'arguments' => array('node' => NULL),
    ),
    'node' => array(
      'arguments' => array('node' => NULL, 'teaser' => FALSE, 'page' => FALSE),
      'template' => 'node',
    ),
    'node_filter_form' => array(
      'arguments' => array('form' => NULL),
      'file' => 'node.admin.inc',
    ),
  );}
}

$2