/**
 * Implements hook_hook_info().
 */
function <?php print $basename; ?>_hook_info() {
  ${1:return array(
    'comment' => array(
      'comment' => array(
        'insert' => array(
          'runs when' => t('After saving a new comment'),
        ),
        'update' => array(
          'runs when' => t('After saving an updated comment'),
        ),
        'delete' => array(
          'runs when' => t('After deleting a comment')
        ),
        'view' => array(
          'runs when' => t('When a comment is being viewed by an authenticated user')
        ),
      ),
    ),
  );}
}

$2