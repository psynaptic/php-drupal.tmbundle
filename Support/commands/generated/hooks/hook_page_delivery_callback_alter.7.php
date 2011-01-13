/**
 * Implements hook_page_delivery_callback_alter().
 */
function <?php print $basename; ?>_page_delivery_callback_alter(&\$callback) {
  ${1:// jQuery sets a HTTP_X_REQUESTED_WITH header of 'XMLHttpRequest'.
  // If a page would normally be delivered as an html page, and it is called
  // from jQuery, deliver it instead as an AJAX response.
  if (isset(\$_SERVER['HTTP_X_REQUESTED_WITH']) && \$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && \$callback == 'drupal_deliver_html_page') {
    \$callback = 'ajax_deliver';
  \}}
}

$2