/**
 * Implements theme_breadcrumb().
 */
function <?php print $basename; ?>_breadcrumb(\$breadcrumb) {
  ${1:if (!empty(\$breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' » ', \$breadcrumb) .'</div>';
  \}}
}

$2