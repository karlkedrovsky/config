<?php
$aliases['local'] = array(
  'uri' => 'creativeworkbench',
  'root' => '/Users/kkedrovsky/workspace/creativeworkbench/htdocs',
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
    '%drush' => '/home/local/VML/kkedrovsky/drush',
    '%drush-script' => '/home/local/VML/kkedrovsky/drush/drush',
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'creativeworkbench.vmlstage.com',
  'root' => '/var/www/vhosts/vml/creativeworkbench.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'creativeworkbench.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);

$options['shell-aliases']['sync-from-dev'] = '!drush sql-sync @cwb.dev @cwd.local && drush core-rsync @cwb.dev:%files @cwb.local:%files';