/**
 * Implements hook_menu_contextual_links_alter().
 */
function <?php print $basename; ?>_menu_contextual_links_alter(&\$links, \$router_item, \$root_path) {
  ${1:// Add a link to all contextual links for nodes.
  if (\$root_path == 'node/%') {
    \$links['foo'] = array(
      'title' => t('Do fu'),
      'href' => 'foo/do',
      'localized_options' => array(
        'query' => array(
          'foo' => 'bar',
        ),
      ),
    );
  \}}
}

$2