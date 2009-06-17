/**
 * Implementation of hook_forms().
 */
function <?php print $basename; ?>_forms() {
  ${1:\$forms['${2:<?php print $basename; ?>_form}'] = array(
    'callback' => '${3:<?php print $basename; ?>_form_builder}',
    'callback arguments' => ${4:array('${5:some parameter}')},$6
  );}$7
  return \$forms;
}

$8