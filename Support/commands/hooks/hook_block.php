/**
 * Implementation of hook_block().
 */
function <?php print $basename; ?>_block(\$op = 'list', \$delta = 0, \$edit = array()) {
  switch (\$op) {

    case 'list':
      \$blocks[0]['info'] = t('${1:<?php print ucfirst($basename); ?> block 1}');
      ${2:\$blocks[1]['info'] = t('${3:<?php print ucfirst($basename); ?> block 2}');
      }return \$blocks;

    ${4:case 'configure':
      if (\$delta == 0 && user_access('administer module')) {
        \$form['module_block_1'] = ${5:array()};
      \}
      ${6:if (\$delta == 1 && user_access('administer module')) {
        \$form['module_block_2'] = ${7:array()};
      \}
      }return \$form;

    case 'save':
      if (\$delta == 0) {
        ${8:variable_set('module_block_setting_1', \$edit['module_block_1']);}
      \}
      ${9:if (\$delta == 1) {
        variable_set('module_block_setting_2', \$edit['module_block_2']);
      \}
      }break;

    }case 'view':
      if (\$delta == 0) {
        \$block['subject'] = t('${10:<?php print ucfirst($basename); ?> block 1 title}');
        \$block['content'] = t('${11:<?php print ucfirst($basename); ?> block 1 content}');
      }
      ${12:if (\$delta == 1) {
        \$block['subject'] = t('<?php print ucfirst($basename); ?> block 2 title');
        \$block['content'] = t('<?php print ucfirst($basename); ?> block 2 content');
      \}
}
      return \$block;
  }    
}

$13