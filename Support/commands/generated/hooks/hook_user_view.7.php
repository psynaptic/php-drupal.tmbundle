/**
 * Implements hook_user_view().
 */
function <?php print $basename; ?>_user_view(\$account, \$view_mode, \$langcode) {
  ${1:if (user_access('create blog content', \$account)) {
    \$account->content['summary']['blog'] =  array(
      '#type' => 'user_profile_item',
      '#title' => t('Blog'),
      '#markup' => l(t('View recent blog entries'), "blog/\$account->uid", array('attributes' => array('title' => t("Read !username's latest blog entries.", array('!username' => format_username(\$account)))))),
      '#attributes' => array('class' => array('blog')),
    );
  \}}
}

$2