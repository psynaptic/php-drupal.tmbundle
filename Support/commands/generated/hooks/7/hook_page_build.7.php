/**
 * Implements hook_page_build().
 */
function <?php print $basename; ?>_page_build(&\$page) {
  ${1:if (menu_get_object('node', 1)) {
    // We are on a node detail page. Append a standard disclaimer to the
    // content region.
    \$page['content']['disclaimer'] = array(
      '#markup' => t('Acme, Inc. is not responsible for the contents of this sample code.'),
      '#weight' => 25,
    );
  \}}
}

$2