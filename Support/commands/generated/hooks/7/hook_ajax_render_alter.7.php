/**
 * Implements hook_ajax_render_alter().
 */
function <?php print $basename; ?>_ajax_render_alter(\$commands) {
  ${1:// Inject any new status messages into the content area.
  \$commands[] = ajax_command_prepend('#block-system-main .content', theme('status_messages'));}
}

$2