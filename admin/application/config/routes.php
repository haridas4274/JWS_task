<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Admin';
$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;

$route['user/(:num)'] = 'Admin/user/$1';
$route['booking/(:num)'] = 'Admin/booking/$1';
$route['referal'] = 'Admin/referal_list';
