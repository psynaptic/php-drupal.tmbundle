/**
 * Implements hook_openid_discovery_method_info_alter().
 */
function <?php print $basename; ?>_openid_discovery_method_info_alter(&\$methods) {
  ${1:// Remove XRI discovery scheme.
  unset(\$methods['xri']);}
}

$2