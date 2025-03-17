<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/login';
$route['home'] = 'ui/home';
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['dashboard'] = 'dashboard/index';  
$route['logout'] = 'auth/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
