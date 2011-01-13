\$form['${1/(\w+)| /(?1:\l$0:_)/g}'] = array(
  '#type' => 'radio',
  '#title' => t('${1:Option}'),
  '#description' => ${2:t('${3:Select this option.}')},
  '#return_value' => $4,$5
);
$6