/**
 * Implements hook_search_status().
 */
function <?php print $basename; ?>_search_status() {
  ${1:\$total = db_query('SELECT COUNT(*) FROM {node\} WHERE status = 1')->fetchField();
  \$remaining = db_query("SELECT COUNT(*) FROM {node\} n LEFT JOIN {search_dataset\} d ON d.type = 'node' AND d.sid = n.nid WHERE n.status = 1 AND d.sid IS NULL OR d.reindex <> 0")->fetchField();
  return array('remaining' => \$remaining, 'total' => \$total);}
}

$2