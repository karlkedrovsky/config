<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['skinny-wrap-steph.dev'] = array(
    'uri' => 'dev-skinny-wrap-steph.gotpantheon.com',
    'db-url' => 'mysql://pantheon:6c86b75bb0984714a41077320b47973b@dbserver.dev.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in:12767/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in',
    'remote-user' => 'dev.5a62105a-90c8-48e2-b006-4b39b09addc6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['skinny-wrap-steph.test'] = array(
    'uri' => 'test-skinny-wrap-steph.gotpantheon.com',
    'db-url' => 'mysql://pantheon:ff3b6787724f4d50b78c58829ef006ab@dbserver.test.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in:10192/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in',
    'remote-user' => 'test.5a62105a-90c8-48e2-b006-4b39b09addc6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['skinny-wrap-steph.live'] = array(
    'uri' => 'live-skinny-wrap-steph.gotpantheon.com',
    'db-url' => 'mysql://pantheon:932c5a01e55545a3bf150b5bbdc6a0c8@dbserver.live.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in:11904/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.5a62105a-90c8-48e2-b006-4b39b09addc6.drush.in',
    'remote-user' => 'live.5a62105a-90c8-48e2-b006-4b39b09addc6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['hispanic-development-fund.live'] = array(
    'uri' => 'live-hispanic-development-fund.gotpantheon.com',
    'db-url' => 'mysql://pantheon:682e3e944a094745a8415938073979e0@dbserver.live.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e.drush.in:11904/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e.drush.in',
    'remote-user' => 'live.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['hispanic-development-fund.dev'] = array(
    'uri' => 'dev-hispanic-development-fund.gotpantheon.com',
    'db-url' => 'mysql://pantheon:dc028f1b9180421cb1a3e28cb9844ec0@dbserver.dev.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e.drush.in:14876/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e.drush.in',
    'remote-user' => 'dev.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['hispanic-development-fund.test'] = array(
    'uri' => 'test-hispanic-development-fund.gotpantheon.com',
    'db-url' => 'mysql://pantheon:36e3024cc0554efd85c864b6429b9040@dbserver.test.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e.drush.in:11796/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e.drush.in',
    'remote-user' => 'test.e7d1bf85-57d0-4e97-b68b-1ce3f909d40e',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['stacy-porto.dev'] = array(
    'uri' => 'dev-stacy-porto.gotpantheon.com',
    'db-url' => 'mysql://pantheon:2aed0c73076445a2a0b9dd220a32894c@dbserver.dev.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7.drush.in:11040/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7.drush.in',
    'remote-user' => 'dev.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['stacy-porto.live'] = array(
    'uri' => 'stacyporto.com',
    'db-url' => 'mysql://pantheon:0ff649cafef04a02861654d152e5f479@dbserver.live.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7.drush.in:15174/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7.drush.in',
    'remote-user' => 'live.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['stacy-porto.test'] = array(
    'uri' => 'test-stacy-porto.gotpantheon.com',
    'db-url' => 'mysql://pantheon:c66e804cf7054ec1942ff4c5ac696131@dbserver.test.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7.drush.in:11299/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7.drush.in',
    'remote-user' => 'test.9aeedbf0-4f82-45ad-b1bd-6f28777fbdd7',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
