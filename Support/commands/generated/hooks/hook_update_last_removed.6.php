/**
 * Implements hook_update_last_removed().
 */
function <?php print $basename; ?>_update_last_removed() {
  ${1:// We've removed the 5.x-1.x version of mymodule, including database updates.
  // The next update function is mymodule_update_5200().
  return 5103;}
}

$2