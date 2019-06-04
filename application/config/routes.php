<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
//pagina

$route['principal'] = 'Welcome/index';
$route['quienes_somos'] = 'Welcome/quienes_somos';
$route['terminos_y_condiciones'] = 'Welcome/terminos_y_condiciones';
$route['Contactanos'] = 'Welcome/Contactanos';
$route['comercializacion'] = 'Welcome/comercializacion';

//usuarios

$route['verifico_nuevoregistro'] = 'registroController';
$route['login'] = 'loginController/login';
$route['verifico_usuario'] = 'loginController';
$route['verifico_consulta'] = 'consultaController';
$route['cerrar_sesion'] = 'loginController/cerrar_sesion';
$route['registrarse'] = 'registroController/index';

$route['usuarios_todos'] = 'usuarioController/index';
$route['misdatos'] = 'usuarioController/datosusuario';
$route['verifico_nuevousuario'] = 'usuarioController/agrega_usuario';
$route['agregausuario'] = 'usuarioController/form_agrega_usuario';
$route['usuarios_elimina/(:num)'] = 'usuarioController/eliminar_usuario/$1';
$route['usuarios_modifica/(:any)'] = 'usuarioController/muestra_modificar/$1';
$route['verifico_modificausuario/(:num)'] = 'usuarioController/modificar_usuario/$1';
$route['usuarios_activa/(:num)'] = 'usuarioController/activar_usuario/$1';
$route['muestraeliminados'] = 'usuarioController/muestra_eliminados';

//Productos

$route['agregaproducto'] = 'productoController/form_agrega_producto';
$route['muestraeliminados'] = 'productoController/muestra_eliminados';
$route['muestraproductos'] = 'productoController/index';
$route['verifico_nuevoproducto'] = 'productoController/agrega_producto';
$route['productos_todos'] = 'productoController';
$route['productos_elimina/(:num)'] = 'productoController/eliminar_producto/$1';
$route['productos_modifica/(:num)'] = 'productoController/muestra_modificar/$1';
$route['verifico_modificaproducto/(:num)'] = 'productoController/modificar_producto/$1';
$route['productos_activa/(:num)'] = 'productoController/activar_producto/$1';

//Carrito
$route['carrito'] = 'carrito_controller/electrodomesticos';
$route['carrito_agrega'] = 'carrito_controller/add';
$route['comprar'] = 'carrito_controller/muestra_compra';
$route['confirma_compra'] = 'carrito_controller/guarda_compra';
$route['carrito_actualiza'] = 'carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
