/**
 * Implements hook_form().
 */
function ${1:<?php print $basename; ?>}_form(&\$node, \$form_state) {
  $form = array();
  $type = node_get_types('type', $node);
  
  $form['title'] = array(
    '#type'=> 'textfield',
    '#title' => check_plain($type->title_label),
    '#required' => TRUE,
  );
    
  return $form;
}

$2