/**
 * Implementation of hook_perm().
 */
function <?php print $basename; ?>_perm() {
  return array('${1:administer <?php print $basename; ?>}$2');
}

$3