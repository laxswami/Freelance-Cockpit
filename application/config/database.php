<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
              | -------------------------------------------------------------------
              | DATABASE CONNECTIVITY SETTINGS
              | -------------------------------------------------------------------
              | This file will contain the settings needed to access your database.
              |
              | For complete instructions please consult the 'Database Connection'
              | page of the User Guide.
              |
              */

$active_group = 'default';
$active_record = TRUE;

if (file_exists('./.env')) {

  $db['default']['hostname'] = getenv('DB_HOST');
  $db['default']['username'] = getenv('DB_USER');
  $db['default']['password'] = getenv('DB_PASSWORD');
  $db['default']['database'] = getenv('DB_DATABASE');
  $db['default']['dbdriver'] = 'mysqli';
  $db['default']['dbprefix'] = '';
  $db['default']['pconnect'] = FALSE;
  $db['default']['db_debug'] = TRUE;
  $db['default']['cache_on'] = FALSE;
  $db['default']['cachedir'] = '';
  $db['default']['char_set'] = 'utf8';
  $db['default']['dbcollat'] = 'utf8_general_ci';
  $db['default']['swap_pre'] = '';
  $db['default']['autoinit'] = TRUE;
  $db['default']['stricton'] = FALSE;
} else {
  $db['default']['hostname'] = '127.0.0.1';
  $db['default']['username'] = 'root';
  $db['default']['password'] = '';
  $db['default']['database'] = 'fc';
  $db['default']['dbdriver'] = 'mysqli';
  $db['default']['dbprefix'] = '';
  $db['default']['pconnect'] = FALSE;
  $db['default']['db_debug'] = TRUE;
  $db['default']['cache_on'] = FALSE;
  $db['default']['cachedir'] = '';
  $db['default']['char_set'] = 'utf8';
  $db['default']['dbcollat'] = 'utf8_general_ci';
  $db['default']['swap_pre'] = '';
  $db['default']['autoinit'] = TRUE;
  $db['default']['stricton'] = FALSE;
}


              /* End of file database.php */
              /* Location: ./application/config/database.php */
