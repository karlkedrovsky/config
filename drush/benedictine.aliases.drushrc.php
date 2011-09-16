<?php
$aliases['local'] = array(
  'uri' => 'benedictine',
  'root' => '/Users/kkedrovsky/workspace/benedictine/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'benedictine.vmldev.com',
  'root' => '/var/www/vhosts/benedictine/www.benedictine.edu/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'benedictine.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'benedictine.vmlstage.com',
  'root' => '/var/www/vhosts/benedictine/www.benedictine.edu/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'benedictine.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
