/**
 * Implements hook_filter_FILTER_tips().
 */
function <?php print $basename; ?>_filter_FILTER_tips(\$filter, \$format, \$long) {
  ${1:if (\$long) {
    return t('Lines and paragraphs are automatically recognized. The &lt;br /&gt; line break, &lt;p&gt; paragraph and &lt;/p&gt; close paragraph tags are inserted automatically. If paragraphs are not recognized simply add a couple blank lines.');
  \}
  else {
    return t('Lines and paragraphs break automatically.');
  \}}
}

$2