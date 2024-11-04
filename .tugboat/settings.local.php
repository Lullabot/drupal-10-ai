<?php

$databases['default']['default'] = [
  'database' => 'tugboat',
  'username' => 'tugboat',
  'password' => 'tugboat',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];

// Use the TUGBOAT_REPO_ID to generate a hash salt for Tugboat sites
$settings['hash_salt'] = hash('sha256', getenv('TUGBOAT_REPO_ID'));

// Configure private and public files paths
$settings['file_private_path'] = getenv('TUGBOAT_ROOT') . '/files-private';
$settings['file_public_path'] = 'sites/default/files';

// Configure trusted host patterns for Tugboat URLs
$settings['trusted_host_patterns'] = [
  '^' . getenv('TUGBOAT_DEFAULT_SERVICE_URL_HOST') . '$',
  '^.+\.tugboat\.qa$',
];

// Prevent errors about missing favicon
$config['system.theme.global']['features']['favicon'] = false;

// Development-specific settings
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE; 