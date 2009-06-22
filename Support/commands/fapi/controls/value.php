\$form['${2/(\w+)| /(?1:\l$0:-)/g}'] = array(
  '#type' => 'value',
  '#value' => ${1:'${2:value}'}
);
$3
