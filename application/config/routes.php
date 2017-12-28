<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['books/index'] = 'books/index';
$route['books'] = 'books/index';
$route['books/create'] = 'books/create';  
$route['books/(:any)'] = 'books/view/$1';

// route ADMIN
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin/home';

$route['abooks/edit'] = 'abooks/edit';
$route['abooks/(:any)'] = 'abooks/view/$1';
$route['abooks'] = 'abooks/index';

$route['acategories/edit'] = 'acategories/edit';
$route['acategories/(:any)'] = 'acategories/view/$1';
$route['acategories'] = 'acategories/index';

 
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = ''; 
$route['translate_uri_dashes'] = FALSE;


/*
$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1'; 
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1'; 
*/
