/**
 * Implements hook_block().
 */
function <?php print $basename; ?>_block(\$op = 'list', \$delta = 0, \$edit = array()) {
  ${1:if (\$op == 'list') {
    \$blocks[0] = array('info' => t('Mymodule block #1 shows ...'),
      'weight' => 0, 'status' => 1, 'region' => 'left');
      // BLOCK_CACHE_PER_ROLE will be assumed for block 0.

    \$blocks[1] = array('info' => t('Mymodule block #2 describes ...'),
      'cache' => BLOCK_CACHE_PER_ROLE | BLOCK_CACHE_PER_PAGE);

    return \$blocks;
  \}
  else if (\$op == 'configure' && \$delta == 0) {
    \$form['items'] = array(
      '#type' => 'select',
      '#title' => t('Number of items'),
      '#default_value' => variable_get('mymodule_block_items', 0),
      '#options' => array('1', '2', '3'),
    );
    return \$form;
  \}
  else if (\$op == 'save' && \$delta == 0) {
    variable_set('mymodule_block_items', \$edit['items']);
  \}
  else if (\$op == 'view') {
    switch(\$delta) {
      case 0:
        // Your module will need to define this function to render the block.
        \$block = array('subject' => t('Title of block #1'),
          'content' => mymodule_display_block_1());
        break;
      case 1:
        // Your module will need to define this function to render the block.
        \$block = array('subject' => t('Title of block #2'),
          'content' => mymodule_display_block_2());
        break;
    \}
    return \$block;
  \}}
}

$2