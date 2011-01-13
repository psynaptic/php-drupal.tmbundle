/**
 * Implements hook_mail().
 */
function <?php print $basename; ?>_mail(\$key, &\$message, \$params) {
  ${1:\$account = \$params['account'];
  \$context = \$params['context'];
  \$variables = array(
    '%site_name' => variable_get('site_name', 'Drupal'),
    '%username' => \$account->name,
  );
  if (\$context['hook'] == 'taxonomy') {
    \$object = \$params['object'];
    \$vocabulary = taxonomy_vocabulary_load(\$object->vid);
    \$variables += array(
      '%term_name' => \$object->name,
      '%term_description' => \$object->description,
      '%term_id' => \$object->tid,
      '%vocabulary_name' => \$vocabulary->name,
      '%vocabulary_description' => \$vocabulary->description,
      '%vocabulary_id' => \$vocabulary->vid,
    );
  \}

  // Node-based variable translation is only available if we have a node.
  if (isset(\$params['node'])) {
    \$node = \$params['node'];
    \$variables += array(
      '%uid' => \$node->uid,
      '%node_url' => url('node/'. \$node->nid, array('absolute' => TRUE)),
      '%node_type' => node_get_types('name', \$node),
      '%title' => \$node->title,
      '%teaser' => \$node->teaser,
      '%body' => \$node->body,
    );
  \}
  \$subject = strtr(\$context['subject'], \$variables);
  \$body = strtr(\$context['message'], \$variables);
  \$message['subject'] .= str_replace(array("\r", "\n"), '', \$subject);
  \$message['body'][] = drupal_html_to_text(\$body);}
}

$2