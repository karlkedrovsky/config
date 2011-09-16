<?php
$aliases['local'] = array(
  'uri' => 'takedefense',
  'root' => '/Users/kkedrovsky/workspace/takedefense/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'takedefense.vmldev.com',
  'root' => '/var/www/vhosts/alikemp/drupal.takedefense.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'takedefense.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'takedefense.vmlstage.com',
  'root' => '/var/www/vhosts/alikemp/drupal.takedefense.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'takedefense.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
