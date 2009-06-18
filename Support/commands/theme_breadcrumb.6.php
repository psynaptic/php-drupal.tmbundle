/**
 * Return a themed breadcrumb trail.
 *
 * @param \$breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function theme_breadcrumb(\$breadcrumb) {
  if (!empty(\$breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' » ', \$breadcrumb) .'</div>';
  }
}

$1