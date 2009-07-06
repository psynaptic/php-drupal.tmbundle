\$form['${1/(\w+)| /(?1:\l$0:_)/g}'] = array(
  '#type' => 'textarea',
  '#title' => t('${1:Body}'),
  '#description' => t('${2:The text you enter here appears on the page.}'),
  '#cols' => ${3:60},
  '#rows' => ${4:5},$5
);
$6