<?php
$local_dump_dir = (is_dir('/Users/kkedrovsky')) ? '/Users/kkedrovsky/drush-dump-dir' : '/home/karl/drush-dump-dir';
$aliases['local'] = array(
  'uri' => 'yr',
  'root' => '/Users/kkedrovsky/workspace/yr/htdocs',
  'dump-dir' => $local_dump_dir,
  'path-aliases' => array(
    '%files' => 'sites/vmldev.com/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'www.drupal7.yr.vmldev.com',
  'root' => '/var/www/vhosts/yr/drupal7.yr.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'www.drupal7.yr.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/vmldev.com/files',
  ),
);
