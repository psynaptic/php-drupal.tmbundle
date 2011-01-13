/**
 * Implements hook_form_alter().
 */
function <?php print $basename; ?>_form_alter(&\$form, &\$form_state, \$form_id) {
  ${1:if (isset(\$form['type']) && isset(\$form['#node']) && \$form['type']['#value'] .'_node_form' == \$form_id) {
    \$path = isset(\$form['#node']->path) ? \$form['#node']->path : NULL;
    \$form['path'] = array(
      '#type' => 'fieldset',
      '#title' => t('URL path settings'),
      '#collapsible' => TRUE,
      '#collapsed' => empty(\$path),
      '#access' => user_access('create url aliases'),
      '#weight' => 30,
    );
    \$form['path']['path'] = array(
      '#type' => 'textfield',
      '#default_value' => \$path,
      '#maxlength' => 128,
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#description' => t('Optionally specify an alternative URL by which this node can be accessed. For example, type "about" when writing an about page. Use a relative path and don\'t add a trailing slash or the URL alias won\'t work.'),
    );
    if (\$path) {
      \$form['path']['pid'] = array(
        '#type' => 'value',
        '#value' => db_result(db_query("SELECT pid FROM {url_alias\} WHERE dst = '%s' AND language = '%s'", \$path, \$form['#node']->language))
      );
    \}
  \}}
}

$2