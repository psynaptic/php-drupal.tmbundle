\$form['${1/(\w+)| /(?1:\l$0:-)/g}'] = array(
  '#type' => 'select',
  '#title' => t('${1:Select}'),
  ${2:'#multiple' => TRUE,
  }'#description' => t('${3:The description appears usually below the item.}'),
  '#options' => ${4:array($5)},
  '#default_value' => ${6:-1},$7
);
$8