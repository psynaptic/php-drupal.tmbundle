/**
 * Implements hook_search_info().
 */
function <?php print $basename; ?>_search_info() {
  ${1:return array(
    'title' => 'Content',
    'path' => 'node',
    'conditions_callback' => 'sample_search_conditions_callback',
  );}
}

$2