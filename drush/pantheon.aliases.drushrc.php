<?php
/**
 * This is a Pantheon drush alias file. Place it in your ~/.drush directory or
 * the aliases directory of your local Drush home.
 *
 * To see if it's working, try "drush sa" to list available aliases.
 *
 */
$aliases['skinny-wrap-steph.test'] = array(
  'root' => '.',
  'uri' => 'test-skinny-wrap-steph.gotpantheon.com',
  'db-url' => 'mysql://pantheon:ce22c94fa57e46c09b327560052e7caa@dbserver.test.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in:11427/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.test.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in',
  'remote-user' => 'test.5a62105a-90c8-48e2-b006-4b39b09addc6',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'sites/default/files'
  ),
);
$aliases['skinny-wrap-steph.live'] = array(
  'root' => '.',
  'uri' => 'live-skinny-wrap-steph.gotpantheon.com',
  'db-url' => 'mysql://pantheon:3fbc3b660c134e41a026073026f5a4fe@dbserver.live.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in:11462/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.live.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in',
  'remote-user' => 'live.5a62105a-90c8-48e2-b006-4b39b09addc6',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'sites/default/files'
  ),
);
$aliases['skinny-wrap-steph.dev'] = array(
  'root' => '.',
  'uri' => 'dev-skinny-wrap-steph.gotpantheon.com',
  'db-url' => 'mysql://pantheon:1a2c5875346843e3b71c87bf186986a5@dbserver.dev.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in:11589/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.dev.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in',
  'remote-user' => 'dev.5a62105a-90c8-48e2-b006-4b39b09addc6',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'sites/default/files'
  ),
);
