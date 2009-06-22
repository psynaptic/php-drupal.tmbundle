\$form['${1/(\w+)| /(?1:\l$0:-)/g}'] = array(
  '#type' => 'fieldset',
  '#title' => t('${1:Grouped items}'),
  '#description' => t('${2:The description appears at the top of the fieldset.}'),
  '#collapsible' => ${3:TRUE},
  '#collapsed' => ${4:TRUE},
  '#access' => user_access('${5:administer <?php print $basename; ?>}'),$6
);
$7