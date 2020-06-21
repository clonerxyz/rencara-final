<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'hp/index';
$route['cust/(:num)'] = 'cust';
$route['cust/tr/(:num)'] = 'cust/tr';
//$route['cust/search/(:num)'] = 'cust/tr';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

