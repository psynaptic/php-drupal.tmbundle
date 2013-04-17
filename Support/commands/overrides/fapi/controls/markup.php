\$form['${1/(\w+)| /(?1:\l$0:-)/g}'] = array(
  '#markup' => '${1:value}',
  '#prefix' => '<${2:div}>',
  '#suffix' => '</${2/\\s.*//}>',
);
$3