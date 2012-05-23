<?php
$aliases['local'] = array(
  'uri' => 'partnerportal',
  'root' => '/Users/kkedrovsky/workspace/partnerportal/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'partnerportal.vmldev.com',
  'root' => '/var/www/vhosts/vml/partnerportal.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'partnerportal.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'partnerportal.vmlstage.com',
  'root' => '/var/www/vhosts/vml/partnerportal.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'partnerportal.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
