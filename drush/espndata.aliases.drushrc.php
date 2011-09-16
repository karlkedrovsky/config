<?php
$aliases['local'] = array(
  'uri' => 'espndata',
  'root' => '/Users/kkedrovsky/workspace/espndata/htdocs',
);
$aliases['dev'] = array(
  'uri' => 'espndata.vmldev.com',
  'root' => '/var/www/vhosts/vml/drupal.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'espndata.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'espndata.vmlstage.com',
  'root' => '/var/www/vhosts/vml/drupal.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'espndata.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
