<?php
$aliases['local'] = array(
  'uri' => 'vmlfoundation',
  'root' => '/Users/kkedrovsky/workspace/vmlfoundation/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'vmlfoundation.vmldev.com',
  'root' => '/var/www/vhosts/vml/www.vmlfoundation.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'vmlfoundation.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'vmlfoundation.vmlstage.com',
  'root' => '/var/www/vhosts/vml/www.vmlfoundation.org/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'vmlfoundation.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
