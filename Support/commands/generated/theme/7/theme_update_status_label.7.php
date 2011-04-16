/**
 * Implements theme_update_status_label().
 */
function <?php print $basename; ?>_update_status_label(\$variables) {
  ${1:switch (\$variables['status']) {
    case UPDATE_NOT_SECURE:
      return '<span class="security-error">' . t('Security update required!') . '</span>';

    case UPDATE_REVOKED:
      return '<span class="revoked">' . t('Revoked!') . '</span>';

    case UPDATE_NOT_SUPPORTED:
      return '<span class="not-supported">' . t('Not supported!') . '</span>';

    case UPDATE_NOT_CURRENT:
      return '<span class="not-current">' . t('Update available') . '</span>';

    case UPDATE_CURRENT:
      return '<span class="current">' . t('Up to date') . '</span>';

  \}}
}

$2