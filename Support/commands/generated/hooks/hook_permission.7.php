/**
 * Implements hook_permission().
 */
function <?php print $basename; ?>_permission() {
  ${1:return array(
    'administer my module' =>  array(
      'title' => t('Administer my module'),
      'description' => t('Perform administration tasks for my module.'),
    ),
  );}
}

$2