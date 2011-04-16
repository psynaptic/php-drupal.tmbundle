/**
 * Implements hook_load().
 */
function <?php print $basename; ?>_load(\$node) {
  ${1:\$additions = db_fetch_object(db_query('SELECT * FROM {mytable\} WHERE vid = %d', \$node->vid));
  return \$additions;}
}

$2