<?php
$local_dump_dir = (is_dir('/Users/kkedrovsky')) ? '/Users/kkedrovsky/drush-dump-dir' : '/home/karl/drush-dump-dir';
$aliases['local'] = array(
  'uri' => 'coterie',
  'root' => getenv('HOME') . '/workspace/coterie/htdocs',
  'dump-dir' => $local_dump_dir,
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'coterietheatre.vmldev.com',
  'root' => '/var/www/vhosts/coterietheatre/coterietheatre.org/htdocs',
  'dump-dir' => '/home/local/VML/kkedrovsky/drush-dump-dir',
  'remote-host' => 'coterietheatre.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%drush' => '/home/local/VML/kkedrovsky/drush',
    '%drush-script' => '/home/local/VML/kkedrovsky/drush/drush',
    '%files' => 'sites/default/files',
  ),
);
