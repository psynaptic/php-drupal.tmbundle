/**
 * Implements theme_admin_menu_links().
 */
function <?php print $basename; ?>_admin_menu_links(\$variables) {
  ${1:\$destination = &drupal_static('admin_menu_destination');
  \$elements = \$variables['elements'];
  \$depth = (isset(\$variables['depth']) ? \$variables['depth'] : 0);

  if (!isset(\$destination)) {
    \$destination = drupal_get_destination();
    \$destination = \$destination['destination'];
  \}

  \$output = '';
  \$depth_child = \$depth + 1;
  foreach (element_children(\$elements, TRUE) as \$path) {
    // Early-return nothing if user does not have access.
    if (isset(\$elements[\$path]['#access']) && !\$elements[\$path]['#access']) {
      continue;
    \}
    \$elements[\$path] += array(
      '#attributes' => array(),
      '#options' => array(),
    );
    // Render children to determine whether this link is expandable.
    if (isset(\$elements[\$path]['#type']) || isset(\$elements[\$path]['#theme'])) {
      \$elements[\$path]['#admin_menu_depth'] = \$depth_child;
      \$elements[\$path]['#children'] = drupal_render(\$elements[\$path]);
    \}
    else {
      // Inherit #sorted flag from parent item.
      if (isset(\$elements['#sorted'])) {
        \$elements[\$path]['#sorted'] = TRUE;
      \}
      \$elements[\$path]['#children'] = theme('admin_menu_links', array('elements' => \$elements[\$path], 'depth' => \$depth_child));
      if (!empty(\$elements[\$path]['#children'])) {
        \$elements[\$path]['#attributes']['class'][] = 'expandable';
      \}
      if (isset(\$elements[\$path]['#attributes']['class'])) {
        \$elements[\$path]['#attributes']['class'] = \$elements[\$path]['#attributes']['class'];
      \}
    \}

    \$link = '';
    if (isset(\$elements[\$path]['#href'])) {
      // Strip destination query string from href attribute and apply a CSS class
      // for our JavaScript behavior instead.
      if (isset(\$elements[\$path]['#options']['query']['destination']) && \$elements[\$path]['#options']['query']['destination'] == \$destination) {
        unset(\$elements[\$path]['#options']['query']['destination']);
        \$elements[\$path]['#options']['attributes']['class'][] = 'admin-menu-destination';
      \}

      \$link .= l(\$elements[\$path]['#title'], \$elements[\$path]['#href'], \$elements[\$path]['#options']);
    \}
    elseif (isset(\$elements[\$path]['#title'])) {
      if (!empty(\$elements[\$path]['#options']['html'])) {
        \$title = \$elements[\$path]['#title'];
      \}
      else {
        \$title = check_plain(\$elements[\$path]['#title']);
      \}
      if (!empty(\$elements[\$path]['#options']['attributes'])) {
        \$link .= '<span' . drupal_attributes(\$elements[\$path]['#options']['attributes']) . '>' . \$title . '</span>';
      \}
      else {
        \$link .= \$title;
      \}
    \}

    \$output .= '<li' . drupal_attributes(\$elements[\$path]['#attributes']) . '>';
    \$output .= \$link . \$elements[\$path]['#children'];
    \$output .= '</li>';
  \}
  // @todo #attributes probably required for UL, but already used for LI.
  // @todo Use \$element['#children'] here instead.
  if (\$output && \$depth > 0) {
    \$output = "\n<ul>" . \$output . '</ul>';
  \}
  return \$output;}
}

$2