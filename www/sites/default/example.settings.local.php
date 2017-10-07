<?php

$databases['default']['default'] = [
  'driver' => 'mysql',
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal',
  'host' => 'mysql',
  'prefix' => '',
];

$settings['hash_salt'] = 'template';
$settings['trusted_host_patterns'] = [
  '^127\.0\.0\.1$',
  'varnish',
  'web',
];

$settings['file_private_path'] = '/project/private_files/default';

// Translations.
$config['locale.settings']['translation']['path'] = 'translations/contrib';
$config['locale.settings']['translation']['use_source'] = 'local';

// Redis.
$settings['redis.connection']['host'] = 'redis';

// Varnish.
$config['varnish_purger.settings.varnish']['hostname'] = 'varnish';

// Piwik.
$config['piwik.settings']['url_http'] = 'http://127.0.0.1:8083/';

if (file_exists($app_root . '/' . $site_path . '/../development.settings.php')) {
  include $app_root . '/' . $site_path . '/../development.settings.php';
}
