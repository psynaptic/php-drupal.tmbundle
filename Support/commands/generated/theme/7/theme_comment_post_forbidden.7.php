/**
 * Implements theme_comment_post_forbidden().
 */
function <?php print $basename; ?>_comment_post_forbidden(\$variables) {
  ${1:\$node = \$variables['node'];
  global \$user;

  // Since this is expensive to compute, we cache it so that a page with many
  // comments only has to query the database once for all the links.
  \$authenticated_post_comments = &drupal_static(__FUNCTION__, NULL);

  if (!\$user->uid) {
    if (!isset(\$authenticated_post_comments)) {
      // We only output a link if we are certain that users will get permission
      // to post comments by logging in.
      \$comment_roles = user_roles(TRUE, 'post comments') + user_roles(TRUE, 'skip comment approval');
      \$authenticated_post_comments = isset(\$comment_roles[DRUPAL_AUTHENTICATED_RID]);
    \}

    if (\$authenticated_post_comments) {
      // We cannot use drupal_get_destination() because these links
      // sometimes appear on /node and taxonomy listing pages.
      if (variable_get('comment_form_location_' . \$node->type, COMMENT_FORM_BELOW) == COMMENT_FORM_SEPARATE_PAGE) {
        \$destination = array('destination' => "comment/reply/\$node->nid#comment-form");
      \}
      else {
        \$destination = array('destination' => "node/\$node->nid#comment-form");
      \}

      if (variable_get('user_register', USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL)) {
        // Users can register themselves.
        return t('<a href="@login">Log in</a> or <a href="@register">register</a> to post comments', array('@login' => url('user/login', array('query' => \$destination)), '@register' => url('user/register', array('query' => \$destination))));
      \}
      else {
        // Only admins can add new users, no public registration.
        return t('<a href="@login">Log in</a> to post comments', array('@login' => url('user/login', array('query' => \$destination))));
      \}
    \}
  \}}
}

$2