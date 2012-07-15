<?php
$aliases['local'] = array(
  'uri' => 'contour',
  'root' => '/Users/kkedrovsky/workspace/contour/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'contour.vmldev.com',
  'root' => '/var/www/vhosts/usbank/contour.vmldev.com/htdocs',
  'dump-dir' => '/home/local/VML/kkedrovsky/drush-dump-dir',
  'remote-host' => 'contour.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%drush' => '/home/local/VML/kkedrovsky/drush',
    '%drush-script' => '/home/local/VML/kkedrovsky/drush/drush',
    '%files' => 'sites/default/files',
  ),
);
