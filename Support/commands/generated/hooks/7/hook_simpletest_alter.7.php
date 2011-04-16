/**
 * Implements hook_simpletest_alter().
 */
function <?php print $basename; ?>_simpletest_alter(&\$groups) {
  ${1:// An alternative session handler module would not want to run the original
  // Session https handling test because it checks the sessions table in the
  // database.
  unset(\$groups['Session']['testHttpsSession']);}
}

$2