/**
 * Implements hook_filter_tips().
 */
function <?php print $basename; ?>_filter_tips(\$delta, \$format, \$long = FALSE) {
  ${1:if (\$long) {
    return t('To post pieces of code, surround them with &lt;code&gt;...&lt;/code&gt; tags. For PHP code, you can use &lt;?php ... ?&gt;, which will also colour it based on syntax.');
  \}
  else {
    return t('You may post code using &lt;code&gt;...&lt;/code&gt; (generic) or &lt;?php ... ?&gt; (highlighted PHP) tags.');
  \}}
}

$2