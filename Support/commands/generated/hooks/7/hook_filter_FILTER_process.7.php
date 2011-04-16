/**
 * Implements hook_filter_FILTER_process().
 */
function <?php print $basename; ?>_filter_FILTER_process(\$text, \$filter, \$format, \$langcode, \$cache, \$cache_id) {
  ${1:\$text = preg_replace('|\[codefilter_code\](.+?)\[/codefilter_code\]|se', "<pre>\$1</pre>", \$text);

  return \$text;}
}

$2