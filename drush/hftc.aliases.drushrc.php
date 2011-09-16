<?php
$aliases['local'] = array(
  'uri' => 'headforthecure',
  'root' => '/Users/kkedrovsky/workspace/headforthecure/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'headforthecure.vmldev.com',
  'root' => '/var/www/vhosts/headftcure/www.headforthecure.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'www.headforthecure.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'headforthecure.vmlstage.com',
  'root' => '/var/www/vhosts/headftcure/www.headforthecure.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'www.headforthecure.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
