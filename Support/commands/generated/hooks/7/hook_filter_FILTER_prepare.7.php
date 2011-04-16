/**
 * Implements hook_filter_FILTER_prepare().
 */
function <?php print $basename; ?>_filter_FILTER_prepare(\$text, \$filter, \$format, \$langcode, \$cache, \$cache_id) {
  ${1:// Escape <code> and </code> tags.
  \$text = preg_replace('|<code>(.+?)</code>|se', "[codefilter_code]\$1[/codefilter_code]", \$text);
  return \$text;}
}

$2