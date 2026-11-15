<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost = 'db';
$CFG->dbname = 'moodle';
$CFG->dbuser = 'moodle';
$CFG->dbpass = 'Test123!';
$CFG->prefix = 'mdl_';
$CFG->wwwroot = 'http://localhost:8080';
$CFG->dataroot = '/var/www/moodledata';
$CFG->reverseproxy = false;
$CFG->sslproxy = false;
$CFG->dboptions = array (
  'dbpersist' => false,
  'dbport' => '3306',
  'dbsocket' => false,
  'dbcollation' => 'utf8mb4_unicode_ci',
);
$CFG->directorypermissions = 02770;
$CFG->routerconfigured = false;

require_once(__DIR__ . '/lib/setup.php');
