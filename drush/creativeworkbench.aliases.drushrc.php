<?php
$local_dump_dir = (is_dir('/Users/kkedrovsky')) ? '/Users/kkedrovsky/drush-dump-dir' : '/home/karl/drush-dump-dir';
$aliases['local'] = array(
  'uri' => 'creativeworkbench',
  'root' => '/Users/kkedrovsky/workspace/creativeworkbench/htdocs',
  'dump-dir' => $local_dump_dir,
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'creativeworkbench.vmldev.com',
  'root' => '/var/www/vhosts/vml/creativeworkbench.com/htdocs',
  'dump-dir' => '/home/local/VML/kkedrovsky/drush-dump-dir',
  'remote-host' => 'creativeworkbench.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
