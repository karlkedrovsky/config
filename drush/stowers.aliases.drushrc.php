<?php
$aliases['local'] = array(
  'uri' => 'stowers',
  'root' => '/Users/kkedrovsky/workspace/stowers/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'stowers-institute.vmldev.com',
  'root' => '/var/www/vhosts/stowers/www.stowers-institute.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'stowers-institute.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'stowers-institute.vmlstage.com',
  'root' => '/var/www/vhosts/stowers/www.stowers-institute.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'stowers-institute.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
