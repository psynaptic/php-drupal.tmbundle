/**
 * Implements hook_rdf_mapping().
 */
function <?php print $basename; ?>_rdf_mapping() {
  ${1:return array(
    array(
      'type' => 'node',
      'bundle' => 'blog',
      'mapping' => array(
        'rdftype' => array('sioct:Weblog'),
        'title' => array(
          'predicates' => array('dc:title'),
        ),
        'created' => array(
          'predicates' => array('dc:date', 'dc:created'),
          'datatype' => 'xsd:dateTime',
          'callback' => 'date_iso8601',
        ),
        'body' => array(
          'predicates' => array('content:encoded'),
        ),
        'uid' => array(
          'predicates' => array('sioc:has_creator'),
          'type' => 'rel',
        ),
        'name' => array(
          'predicates' => array('foaf:name'),
        ),
      ),
    ),
  );}
}

$2