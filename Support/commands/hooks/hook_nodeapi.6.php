/**
 * Implements hook_nodeapi().
 */
function <?php print $basename; ?>_nodeapi(&\$node, \$op, \$teaser = NULL, \$page = NULL) {
  switch (\$op) {${1:
    case 'load':
      ${2:// The node is about to be loaded from the database. This hook can be used
      // to load additional data at this time.}
      break;}${3:
    case 'view':
      ${4:// The node is about to be presented to the user. The module may change
      // \$node->body prior to presentation. This hook will be called after
      // hook_view(), so the module may assume the node is filtered and now contains HTML.}
      break;}${5:
    case 'alter':
      ${6:// The \$node->content array has been rendered, so the node body or teaser
      // is filtered and now contains HTML. This op should only be used when text
      // substitution, filtering, or other raw text operations are necessary.}
      break;}${7:
    case 'insert':
      ${8:// The node is being created (inserted in the database).}
      break;}${9:
    case 'update':
      ${10:// The node is being updated.}
      break;}${11:
    case 'validate':
      ${12:// The user has just finished editing the node and is trying to preview or
      // submit it. This hook can be used to check or even modify the node.
      // Errors should be set with form_set_error().}
      break;}${13:
    case 'delete':
      ${14:// The node is being deleted.}
      break;}$15
  }
}

$18