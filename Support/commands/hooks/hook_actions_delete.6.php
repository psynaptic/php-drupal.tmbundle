/**
 * Implementation of hook_actions_delete().
 */
function <?php print $basename; ?>_actions_delete(\$aid) {${1:
  db_query("DELETE FROM {${2:actions_assignments}\} WHERE aid = '%s'", \$aid);}
}

$3