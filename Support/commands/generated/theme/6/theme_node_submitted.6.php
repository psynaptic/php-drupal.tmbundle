/**
 * Implements theme_node_submitted().
 */
function <?php print $basename; ?>_node_submitted(\$node) {
  ${1:return t('Submitted by !username on @datetime',
    array(
      '!username' => theme('username', \$node),
      '@datetime' => format_date(\$node->created),
    ));}
}

$2