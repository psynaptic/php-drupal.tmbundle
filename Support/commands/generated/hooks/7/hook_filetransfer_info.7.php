/**
 * Implements hook_filetransfer_info().
 */
function <?php print $basename; ?>_filetransfer_info() {
  ${1:\$info['sftp'] = array(
    'title' => t('SFTP (Secure FTP)'),
    'file' => 'sftp.filetransfer.inc',
    'class' => 'FileTransferSFTP',
    'weight' => 10,
  );
  return \$info;}
}

$2