/**
 * Implements hook_view().
 */
function <?php print $basename; ?>_view(&\$node, \$teaser = FALSE, \$page = FALSE) {
  ${1:if (\$page) {
    ${2:// If your content type has a custom breadcrumb scheme, modify it here.}
  \}

  }\$node = node_prepare(\$node, \$teaser);
  ${3:// Construct the node body by creating a Forms API like array in \$node->content.
  // If \$teaser is TRUE, an overview version of the node is displayed.
  // If \$page is TRUE, the full node is displayed on a separate page.}
}

$4