<?php
$local_dump_dir = (is_dir('/Users/kkedrovsky')) ? '/Users/kkedrovsky/drush-dump-dir' : '/home/karl/drush-dump-dir';
$aliases['local'] = array(
  'uri' => 'noteworthywork',
  'root' => '/Users/kkedrovsky/workspace/noteworthywork/htdocs',
  'dump-dir' => $local_dump_dir,
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'noteworthywork.vml.vmldev.com',
  'root' => '/var/www/vhosts/vml/noteworthywork.vml.com/htdocs',
  'dump-dir' => '/home//kkedrovsky/drush-dump-dir',
  'remote-host' => 'noteworthywork.vml.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
