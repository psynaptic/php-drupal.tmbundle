/**
 * Implements theme_get_suggestions().
 */
function <?php print $basename; ?>_get_suggestions(\$args, \$base, \$delimiter = '__') {
  ${1:
  // Build a list of suggested theme hooks or body classes in order of
  // specificity. One suggestion is made for every element of the current path,
  // though numeric elements are not carried to subsequent suggestions. For
  // example, for \$base='page', http://www.example.com/node/1/edit would result
  // in the following suggestions and body classes:
  //
  // page__node              page-node
  // page__node__%           page-node-%
  // page__node__1           page-node-1
  // page__node__edit        page-node-edit

  \$suggestions = array();
  \$prefix = \$base;
  foreach (\$args as \$arg) {
    // Remove slashes or null per SA-CORE-2009-003.
    \$arg = str_replace(array("/", "\\", "\0"), '', \$arg);
    // The percent acts as a wildcard for numeric arguments since
    // asterisks are not valid filename characters on many filesystems.
    if (is_numeric(\$arg)) {
      \$suggestions[] = \$prefix . \$delimiter . '%';
    \}
    \$suggestions[] = \$prefix . \$delimiter . \$arg;
    if (!is_numeric(\$arg)) {
      \$prefix .= \$delimiter . \$arg;
    \}
  \}
  if (drupal_is_front_page()) {
    // Front templates should be based on root only, not prefixed arguments.
    \$suggestions[] = \$base . \$delimiter . 'front';
  \}

  return \$suggestions;}
}

$2