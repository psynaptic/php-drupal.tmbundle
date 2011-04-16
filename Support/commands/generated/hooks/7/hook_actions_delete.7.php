/**
 * Implements hook_actions_delete().
 */
function <?php print $basename; ?>_actions_delete(\$aid) {
  ${1:db_delete('actions_assignments')
    ->condition('aid', \$aid)
    ->execute();}
}

$2