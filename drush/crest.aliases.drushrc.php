<?php
$aliases['local'] = array(
  'uri' => 'crest',
  'root' => '/var/www/crest',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);

$aliases['test'] = array(
  'uri' => 'crest-test.kedrovsky.com',
  'root' => '/var/www/crest-test',
  'remote-host' => 'www.kedrovsky.com',
  'remote-user' => 'karl',
  'dump-dir' => '/home/karl/drush-dump-dir',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
