/**
 * Return a themed block.
 *
 * You can style your blocks by defining .block (all blocks),
 * .block-<i>module</i> (all blocks of module <i>module</i>), and
 * \#block-<i>module</i>-<i>delta</i> (specific block of module <i>module</i>
 * with delta <i>delta</i>) in your theme's CSS.
 *
 * @param \$block
 *   An object populated with fields from the "blocks" database table
 *   (\$block->module, \$block->delta ...) and fields returned by
 *   <i>module</i>_block('view') (\$block->subject, \$block->content, ...).
 * @return
 *   A string containing the block output.
 */
function ${1:phptemplate}_block(\$block) {
  \$output  = "<div class=\"block block-\$block->module\" id=\"block-\$block->module-\$block->delta\">\n";
  \$output .= " <h2 class=\"title\">\$block->subject</h2>\n";
  \$output .= " <div class=\"content\">\$block->content</div>\n";
  \$output .= "</div>\n";
  return \$output;
}

$2