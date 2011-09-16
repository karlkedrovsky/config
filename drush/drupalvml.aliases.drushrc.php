<?php
$aliases['local'] = array(
  'uri' => 'drupalvml',
  'root' => '/Users/kkedrovsky/workspace/drupalvml/htdocs',
);
$aliases['dev'] = array(
  'uri' => 'drupal.vml.vmldev.com',
  'root' => '/var/www/vhosts/vml/drupal.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'drupal.vml.vmldev.com',
  'remote-user' => 'kkedrovsky',
);
$aliases['stage'] = array(
  'uri' => 'drupal.vml.vmlstage.com',
  'root' => '/var/www/vhosts/vml/drupal.vml.com/htdocs',
  'dump-dir' => '/home/kkedrovsky/drush-dump-dir',
  'remote-host' => 'drupal.vml.vmlstage.com',
  'remote-user' => 'kkedrovsky',
);
$aliases['prod'] = array(
  'uri' => 'drupal.vml.com',
  'root' => '/var/www/vhosts/vml/drupal.vml.com/htdocs',
  'remote-host' => 'drupal.vml.com',
  'remote-user' => 'kkedrovsky',
);
