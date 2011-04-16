\$form['${1/(\w+)| /(?1:\l$0:_)/g}'] = array(
  '#type' => 'file',
  '#title' => t('${1:File}'),
  '#description' => t('${2:Select the file you want to attach.}'),
  '#size' => ${3:40},$4
);
$5