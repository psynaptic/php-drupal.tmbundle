/**
 * Implements hook_openid_normalization_method_info_alter().
 */
function <?php print $basename; ?>_openid_normalization_method_info_alter(&\$methods) {
  ${1:// Remove Google IDP normalization.
  unset(\$methods['google_idp']);}
}

$2