<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//read all
$route['read'] = 'apicontroller/readall';
//read one
$route['read/(:num)'] = 'apicontroller/read/$1';
//create
$route['create'] = 'apicontroller/create';
//update
$route['update/(:num)'] = 'apicontroller/update/$1';
//delete
$route['delete/(:num)'] = 'apicontroller/delete/$1';