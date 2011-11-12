<?php
$aliases['local'] = array(
  'uri' => 'harvestbaptistks',
  'root' => '/Users/kkedrovsky/workspace/harvestbaptistks/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['prod'] = array(
  'uri' => 'www.harvestbaptistks.org',
  'root' => '/var/www/harvestbaptistks/htdocs',
  'remote-host' => 'harvestbaptistks.org',
  'remote-user' => 'karl',
  'dump-dir' => '/home/karl/drush-dump-dir',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
