\$form['${1/(\w+)| /(?1:\l$0:_)/g}'] = array(
  '#type' => 'checkboxes',
  '#title' => t('${1:Options}'),
  '#description' => t('${2:The description appears usually below the checkboxes.}'),
  '#options' => ${3:array()},
  '#default_value' => ${4:array()},$5
);
$6