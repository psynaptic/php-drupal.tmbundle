\$form['${1/(\w+)| /(?1:\l$0:_)/g}'] = array(
  '#type' => 'password',
  '#title' => t('${1:Password}'),
  '#description' => t('${2:Enter your password here.}'),
  '#size' => ${3:30},
  '#maxlength' => ${4:64},$5
);
$6