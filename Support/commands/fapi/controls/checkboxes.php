\$form['${1/(\w+)| /(?1:\l$0:-)/g}'] = array(
  '#type' => 'checkboxes',
  '#title' => t('${1:Options}'),
  '#description' => t('${2:The description appears usually below the checkboxes.}'),
  '#options' => ${3:array($4)},
  '#default_value' => ${5:-1},$6
);
$7