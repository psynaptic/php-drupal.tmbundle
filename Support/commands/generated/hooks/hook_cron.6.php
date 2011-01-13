/**
 * Implements hook_cron().
 */
function <?php print $basename; ?>_cron() {
  ${1:\$result = db_query('SELECT * FROM {site\} WHERE checked = 0 OR checked
    + refresh < %d', time());

  while (\$site = db_fetch_array(\$result)) {
    cloud_update(\$site);
  \}}
}

$2