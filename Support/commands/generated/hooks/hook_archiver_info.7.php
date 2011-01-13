/**
 * Implements hook_archiver_info().
 */
function <?php print $basename; ?>_archiver_info() {
  ${1:return array(
    'tar' => array(
      'class' => 'ArchiverTar',
      'extensions' => array('tar', 'tar.gz', 'tar.bz2'),
    ),
  );}
}

$2