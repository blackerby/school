<?php

define('APP_PATH', dirname(__FILE__) . '/../');

require('config.php');
require('helpers.php');
require('data/data.class.php');

Data::initialize(new DataProvider(CONFIG['db']));
