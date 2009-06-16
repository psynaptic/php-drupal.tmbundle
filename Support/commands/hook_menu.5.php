/**
 * Implementation of hook_menu().
 */
function <?php print $basename; ?>_menu(\$may_cache) {
	\$items = array();

	if (\$may_cache) {
		${1:// Put items that are not specific to this request here.}
	}${2:
	else {
		${3:// Only put items based in arg() here.}
	\}}
	return \$items;
}
$4