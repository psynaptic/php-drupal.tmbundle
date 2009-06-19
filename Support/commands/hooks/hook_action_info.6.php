/**
 * Implementation of hook_action_info().
 */
function <?php print $basename; ?>_action_info() {
  \$info['${1:<?php print $basename; ?>_action}'] = array(
    'type' => '${2:system}',
    'description' => t('${3:Do something}'),
    'configurable' => ${4:FALSE},
    'hooks' => array(${5:
      ${6:'nodeapi' => array(${7:'view', }${8:'insert', }${9:'update', }${10:'delete'}),
      }${11:'comment' => array(${12:'view', }${13:'insert', }${14:'update', }${15:'delete'}),
      }${16:'user' => array(${17:'view', }${18:'insert', }${19:'update', }${20:'delete', }${21:'login'}),
      }${22:'taxonomy' => array(${23:'insert', }${24:'update', }${25:'delete'}),
    }}),$26
  );$27
  return \$info;
}

$28