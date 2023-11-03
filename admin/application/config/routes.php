<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Admin';
$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;

$route['user/(:num)'] = 'Admin/user/$1';
$route['user_active'] = 'Admin/user_active';
$route['update_order'] = 'Admin/update_order';
$route['products'] = 'Admin/products';
$route['product_page'] = 'Admin/product_page';
$route['booking/(:num)'] = 'Admin/booking/$1s';
$route['referal'] = 'Admin/referal_list';
