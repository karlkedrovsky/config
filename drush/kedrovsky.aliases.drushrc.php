<?php
if (PHP_OS == 'Darwin') {
  $aliases['local'] = array(
    'uri' => 'kedrovsky',
    'root' => '/Users/kkedrovsky/workspace/kedrovsky.com/htdocs',
    'dump-dir' => '/Users/kkedrovsky/drush-dump-dir',
    'path-aliases' => array(
      '%files' => 'sites/www.kedrovsky.com/files',
    ),
  );
} elseif (gethostname() == 'home') {
  // Home development VM
  $aliases['local'] = array(
    'uri' => 'kedrovsky',
    'root' => '/var/www/kedrovsky.com/htdocs',
    'path-aliases' => array(
      '%files' => 'sites/www.kedrovsky.com/files',
    ),
  );
} else {
  $aliases['local'] = array(
    'uri' => 'kedrovsky',
    'root' => '/home/karl/workspace/kedrovsky.com/htdocs',
    'dump-dir' => '/home/karl/drush-dump-dir',
    'path-aliases' => array(
      '%files' => 'sites/www.kedrovsky.com/files',
    ),
  );
}
$aliases['prod'] = array(
  'uri' => 'www.kedrovsky.com',
  'root' => '/var/www/kedrovsky.com/htdocs',
  'dump-dir' => '/home/karl/drush-dump-dir',
  'remote-host' => 'www.kedrovsky.com',
  'remote-user' => 'karl',
  'path-aliases' => array(
    '%files' => 'sites/www.kedrovsky.com/files',
  ),
);
