/**
 * Implements hook_node_info().
 */
function <?php print $basename; ?>_node_info() {
  ${1:return array(
    'book' => array(
      'name' => t('book page'),
      'module' => 'book',
      'description' => t("A book is a collaborative writing effort: users can collaborate writing the pages of the book, positioning the pages in the right order, and reviewing or modifying pages previously written. So when you have some information to share or when you read a page of the book and you didn't like it, or if you think a certain page could have been written better, you can do something about it."),
    )
  );}
}

$2