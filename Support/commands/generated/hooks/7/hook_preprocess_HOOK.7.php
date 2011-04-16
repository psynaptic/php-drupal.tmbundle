/**
 * Implements hook_preprocess_HOOK().
 */
function <?php print $basename; ?>_preprocess_HOOK(&\$variables) {
  ${1:// This example is from rdf_preprocess_image(). It adds an RDF attribute
  // to the image hook's variables.
  \$variables['attributes']['typeof'] = array('foaf:Image');}
}

$2