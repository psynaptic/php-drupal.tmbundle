/**
 * Implements hook_taxonomy_term_load().
 */
function <?php print $basename; ?>_taxonomy_term_load(\$terms) {
  ${1:\$result = db_query('SELECT tid, foo FROM {mytable\} WHERE tid IN (:tids)', array(':tids' => array_keys(\$terms)));
  foreach (\$result as \$record) {
    \$terms[\$record->tid]->foo = \$record->foo;
  \}}
}

$2