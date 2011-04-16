/**
 * Implements theme_options_none().
 */
function <?php print $basename; ?>_options_none(\$variables) {
  ${1:\$instance = \$variables['instance'];
  \$option = \$variables['option'];

  \$output = '';
  switch (\$instance['widget']['type']) {
    case 'options_buttons':
      \$output = t('N/A');
      break;

    case 'options_select':
      \$output = (\$option == 'option_none' ? t('- None -') : t('- Select a value -'));
      break;
  \}

  return \$output;}
}

$2