/**
 * Implements hook_form_FORM_ID_alter().
 */
function <?php print $basename; ?>_form_FORM_ID_alter(&\$form, &\$form_state) {
  ${1:// Modification for the form with the given form ID goes here. For example, if
  // FORM_ID is "user_register" this code would run only on the user
  // registration form.

  // Add a checkbox to registration form about agreeing to terms of use.
  \$form['terms_of_use'] = array(
    '#type' => 'checkbox',
    '#title' => t("I agree with the website's terms and conditions."),
    '#required' => TRUE,
  );}
}

$2