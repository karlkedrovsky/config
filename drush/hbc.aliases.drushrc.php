<?php
if (PHP_OS == 'Darwin') {
  $aliases['local'] = array(
    'uri' => 'harvestbaptistks',
    'root' => '/Users/kkedrovsky/workspace/harvestbaptistks.org/htdocs',
    'path-aliases' => array(
      '%files' => 'sites/default/files',
    ),
  );
} else {
  $aliases['local'] = array(
    'uri' => 'harvestbaptistks',
    'root' => '/home/karl/workspace/harvestbaptistks.org/htdocs',
    'path-aliases' => array(
      '%files' => 'sites/default/files',
    ),
  );
}
$aliases['prod'] = array(
  'uri' => 'www.harvestbaptistks.org',
  'root' => '/var/www/harvestbaptistks/htdocs',
  'remote-host' => 'www.kedrovsky.com',
  'remote-user' => 'karl',
  'dump-dir' => '/home/karl/drush-dump-dir',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
