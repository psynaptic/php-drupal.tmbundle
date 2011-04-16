/**
 * Implements hook_menu().
 */
function <?php print $basename; ?>_menu() {
  ${1:\$items['blog'] = array(
    'title' => 'blogs',
    'page callback' => 'blog_page',
    'access arguments' => array('access content'),
    'type' => MENU_SUGGESTED_ITEM,
  );
  \$items['blog/feed'] = array(
    'title' => 'RSS feed',
    'page callback' => 'blog_feed',
    'access arguments' => array('access content'),
    'type' => MENU_CALLBACK,
  );

  return \$items;}
}

$2