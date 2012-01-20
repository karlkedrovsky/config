<?php
$aliases['local'] = array(
  'uri' => 'simplestage',
  'root' => '/Users/kkedrovsky/workspace/simplestage/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'simplestage.vmldev.com',
  'root' => '/var/www/vhosts/vml/simplestage.vml.com/htdocs',
  'dump-dir' => '/home/local/VML/kkedrovsky/drush-dump-dir',
  'remote-host' => 'simplestage.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'simplestage.vmlstage.com',
  'root' => '/var/www/vhosts/vml/simplestage.vml.com/htdocs',
  'dump-dir' => '/home/local/VML/kkedrovsky/drush-dump-dir',
  'remote-host' => 'simplestage.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
