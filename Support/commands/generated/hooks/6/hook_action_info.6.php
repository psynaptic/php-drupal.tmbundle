/**
 * Implements hook_action_info().
 */
function <?php print $basename; ?>_action_info() {
  ${1:return array(
    'comment_unpublish_action' => array(
      'description' => t('Unpublish comment'),
      'type' => 'comment',
      'configurable' => FALSE,
      'hooks' => array(
        'comment' => array('insert', 'update'),
      )
    ),
    'comment_unpublish_by_keyword_action' => array(
      'description' => t('Unpublish comment containing keyword(s)'),
      'type' => 'comment',
      'configurable' => TRUE,
      'hooks' => array(
        'comment' => array('insert', 'update'),
      )
    )
  );}
}

$2