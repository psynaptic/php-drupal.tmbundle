/**
 * Implements hook_dashboard_regions().
 */
function <?php print $basename; ?>_dashboard_regions() {
  ${1:// Define a new dashboard region. Your module can also then define
  // theme_mymodule_dashboard_region() as a theme wrapper function to control
  // the region's appearance.
  return array('mymodule_dashboard_region' => "My module's dashboard region");}
}

$2