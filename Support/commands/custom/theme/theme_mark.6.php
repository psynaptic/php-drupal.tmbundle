/**
 * Return a themed marker, useful for marking new or updated
 * content.
 *
 * @param \$type
 *   Number representing the marker type to display
 * @see MARK_NEW, MARK_UPDATED, MARK_READ
 * @return
 *   A string containing the marker.
 */
function <?php print $basename; ?>_mark(\$type = MARK_NEW) {
  global \$user;
  if (\$user->uid) {
    if (\$type == MARK_NEW) {
      return ' <span class="marker">'. t('new') .'</span>';
    }
    else if (\$type == MARK_UPDATED) {
      return ' <span class="marker">'. t('updated') .'</span>';
    }
  }
}

$1