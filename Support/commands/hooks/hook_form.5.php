/**
 * Implements hook_form().
 */
function <?php print $basename; ?>_form(&\$node, \$form_value) {
  \$form = array();
  \$type = node_get_types('type', \$node);
  
  \$form['title'] = array(
    '#type'=> 'textfield',
    '#title' => check_plain(\$type->title_label),
    '#required' => TRUE,
  );
    
  return \$form;
}

$1