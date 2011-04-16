/**
 * Implements hook_token_info_alter().
 */
function <?php print $basename; ?>_token_info_alter(&\$data) {
  ${1:// Modify description of node tokens for our site.
  \$data['tokens']['node']['nid'] = array(
    'name' => t("Node ID"),
    'description' => t("The unique ID of the article."),
  );
  \$data['tokens']['node']['title'] = array(
    'name' => t("Title"),
    'description' => t("The title of the article."),
  );

  // Chained tokens for nodes.
  \$data['tokens']['node']['created'] = array(
    'name' => t("Date created"),
    'description' => t("The date the article was posted."),
    'type' => 'date',
  );}
}

$2