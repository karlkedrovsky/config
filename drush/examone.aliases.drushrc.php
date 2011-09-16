<?php
$aliases['local'] = array(
  'uri' => 'examone',
  'root' => '/Users/kkedrovsky/workspace/examone/htdocs',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['dev'] = array(
  'uri' => 'examone.vmldev.com',
  'root' => '/var/www/vhosts/QuestDiagnostics/www.examone.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'examone.vmldev.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
$aliases['stage'] = array(
  'uri' => 'examone.vmlstage.com',
  'root' => '/var/www/vhosts/QuestDiagnostics/www.examone.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'examone.vmlstage.com',
  'remote-user' => 'kkedrovsky',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);
