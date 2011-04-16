/**
 * Implements hook_dashboard_regions_alter().
 */
function <?php print $basename; ?>_dashboard_regions_alter(\$regions) {
  ${1:// Remove the sidebar region defined by the core dashboard module.
  unset(\$regions['dashboard_sidebar']);}
}

$2