/**
 * Implements hook_filter().
 */
function <?php print $basename; ?>_filter(\$op, \$delta = 0, \$format = -1, \$text = '', \$cache_id = 0) {
  ${1:switch (\$op) {
    case 'list':
      return array(0 => t('Code filter'));

    case 'description':
      return t('Allows users to post code verbatim using &lt;code&gt; and &lt;?php ?&gt; tags.');

    case 'prepare':
      // Note: we use [ and ] to replace < > during the filtering process.
      // For more information, see "Temporary placeholders and
      // delimiters" at http://drupal.org/node/209715.
      \$text = preg_replace('@<code>(.+?)</code>@se', "'[codefilter-code]' . codefilter_escape('\\1') . '[/codefilter-code]'", \$text);
      \$text = preg_replace('@<(\?(php)?|%)(.+?)(\?|%)>@se', "'[codefilter-php]' . codefilter_escape('\\3') . '[/codefilter-php]'", \$text);
      return \$text;

    case "process":
      \$text = preg_replace('@[codefilter-code](.+?)[/codefilter-code]@se', "codefilter_process_code('\$1')", \$text);
      \$text = preg_replace('@[codefilter-php](.+?)[/codefilter-php]@se', "codefilter_process_php('\$1')", \$text);
      return \$text;

    default:
      return \$text;
  \}}
}

$2