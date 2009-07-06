\$form['${1/(\w+)| /(?1:\l$0:_)/g}'] = array(
  '#type' => 'textfield',
  '#title' => t('${1:Title}'),
  '#description' => t('${2:The title you enter here appears on the page.}'),
  '#size' => ${3:40},
  '#maxlength' => ${4:255},$5
);
$6