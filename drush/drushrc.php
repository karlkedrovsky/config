<?php

$home_directory = getenv('HOME');
if (is_dir('/var/drupal-config')) {
  $_SERVER['DRUPAL_CONFIG'] = '/var/drupal-config/';
} else {
  $_SERVER['DRUPAL_CONFIG'] = $home_directory . '/drupal-config/';
}
$options['dump-dir'] = $home_directory . '/drush-dump-dir';
