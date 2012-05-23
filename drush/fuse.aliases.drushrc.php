<?php
$aliases['local'] = array(
  'uri' => 'fuse',
  'root' => '/Users/kkedrovsky/workspace/fuse/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'fuse.vmldev.com',
  'root' => '/var/www/vhosts/vml/fuse.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'fuse.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'fuse.vmlstage.com',
  'root' => '/var/www/vhosts/vml/fuse.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'fuse.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
