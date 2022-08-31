<?php

define('APP_PATH', dirname(__FILE__) . '/../');

require('config.php');
require('helpers.php');
require('data/data.class.php');
require('data/mysqldataprovider.class.php');

Data::initialize(new MySqlDataProvider(CONFIG['db']));
