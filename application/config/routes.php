<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** HALAMAN PUBLIK **/
$route['default_controller'] = 'home';
$route['about'] = 'about';

/** HALAMAN USER **/
$route['user'] = 'user';
$route['user/reg'] = 'user/formRegister';
$route['user/register'] = 'user/register';
$route['user/update'] = 'user/update';


$route['user/login'] = 'user/loginform';  // formulir login user
$route['user/login/(:any)'] = 'user/loginform/$1';  // formulir login user
$route['user/logout'] = 'user/logout';  //  logout user

$route['user/dologin'] = 'user/login';  // proses login user

$route['user/profile'] = 'user/editprofile';
$route['user/uploadfoto'] = 'user/uploadfoto';

$route['user/(:any)'] = 'user/data/$1';  /* $1 = id user; */

/** NEWS  **/
$route['news'] = 'news';
$route['news/entry'] = 'news/entrinews';
$route['news/submit'] = 'news/submitnews';




/** AJAX  **/
$route['ajax/cekuser'] = 'ajax/cekusername';
$route['ajax/cekemail'] = 'ajax/cekemail';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
