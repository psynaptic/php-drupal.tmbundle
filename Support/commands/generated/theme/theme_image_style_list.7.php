/**
 * Implements theme_image_style_list().
 */
function <?php print $basename; ?>_image_style_list(\$variables) {
  ${1:\$styles = \$variables['styles'];

  \$header = array(t('Style name'), t('Settings'), array('data' => t('Operations'), 'colspan' => 3));
  \$rows = array();
  foreach (\$styles as \$style) {
    \$row = array();
    \$row[] = l(\$style['name'], 'admin/config/media/image-styles/edit/' . \$style['name']);
    \$link_attributes = array(
      'attributes' => array(
        'class' => array('image-style-link'),
      ),
    );
    if (\$style['storage'] == IMAGE_STORAGE_NORMAL) {
      \$row[] = t('Custom');
      \$row[] = l(t('edit'), 'admin/config/media/image-styles/edit/' . \$style['name'], \$link_attributes);
      \$row[] = l(t('delete'), 'admin/config/media/image-styles/delete/' . \$style['name'], \$link_attributes);
    \}
    elseif (\$style['storage'] == IMAGE_STORAGE_OVERRIDE) {
      \$row[] = t('Overridden');
      \$row[] = l(t('edit'), 'admin/config/media/image-styles/edit/' . \$style['name'], \$link_attributes);
      \$row[] = l(t('revert'), 'admin/config/media/image-styles/revert/' . \$style['name'], \$link_attributes);
    \}
    else {
      \$row[] = t('Default');
      \$row[] = l(t('edit'), 'admin/config/media/image-styles/edit/' . \$style['name'], \$link_attributes);
      \$row[] = '';
    \}
    \$rows[] = \$row;
  \}

  if (empty(\$rows)) {
    \$rows[] = array(array(
      'colspan' => 4,
      'data' => t('There are currently no styles. <a href="!url">Add a new one</a>.', array('!url' => url('admin/config/media/image-styles/add'))),
    ));
  \}

  return theme('table', array('header' => \$header, 'rows' => \$rows));}
}

$2