<?php
$aliases['local'] = array(
  'uri' => 'hopehouse',
  'root' => '/Users/kkedrovsky/workspace/hopehouse/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'hopehouse.vmldev.com',
  'root' => '/var/www/vhosts/HopeHouse/www.hopehouse.net/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'hopehouse.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'hopehouse.vmlstage.com',
  'root' => '/var/www/vhosts/HopeHouse/www.hopehouse.net/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'hopehouse.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
