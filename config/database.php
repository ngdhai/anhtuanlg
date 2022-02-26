<?php return array (
  'fetch' => 8,
  'default' => 'mysql',
  'connections' => 
  array (
    'sqlite' => 
    array (
      'driver' => 'sqlite',
      'database' => storage_path().DIRECTORY_SEPARATOR.'localhost123.sqlite',
      'prefix' => '',
      'host' => '',
      'username' => 'admin@gmail.com',
      'password' => '123456',
    ),
    'mysql' => 
    array (
      'driver' => 'mysql',
      'host' => '217.21.74.202',
      'database' => 'u943322177_logistic',
      'username' => 'u943322177_logistic',
      'password' => 'Anhtuan98',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => '',
      'strict' => false,
    ),
    'pgsql' => 
    array (
      'driver' => 'pgsql',
      'host' => 'localhost',
      'database' => 'forge',
      'username' => 'forge',
      'password' => '',
      'charset' => 'utf8',
      'prefix' => '',
      'schema' => 'public',
    ),
    'sqlsrv' => 
    array (
      'driver' => 'sqlsrv',
      'host' => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'prefix' => '',
    ),
  ),
  'migrations' => 'migrations',
  'redis' => 
  array (
    'cluster' => false,
    'default' => 
    array (
      'host' => '127.0.0.1',
      'port' => 6379,
      'database' => 0,
    ),
  ),
);