<?php
$aliases['local'] = array(
  'uri' => 'kedrovsky',
  'root' => '/Users/kkedrovsky/workspace/kedrovsky.com/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/www.kedrovsky.com/files',
  ),
);
$aliases['prod'] = array(
  'uri' => 'www.kedrovsky.com',
  'root' => '/var/www/kedrovsky.com/htdocs',
  'dump-dir' => '/home/karl/drush-dump-dir',
  'remote-host' => 'www.kedrovsky.com',
  'remote-user' => 'karl',
  'path-aliases' => array(
    '%files' => 'sites/www.kedrovsky.com/files',
  ),
);
