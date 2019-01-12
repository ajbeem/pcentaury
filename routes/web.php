<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layoutsPrincipal.app');
});

Route::get('/index', function () {
    return view('layoutsPrincipal.index');
});

Route::get('/vue', function () {
    return view('componenteVue');
});

Route::get('/infografia_interfaces', function () {
    return view('/viewsPruebas/infografia_interfaces');
});
//Route::resource('gastos', 'Cxp\GastosController' );
//Controladores de Usuarios
Route::resource('/usuarios','usr\usersController');
Route::resource('avatar', 'usr\avatarController' );
Route::resource('datosadicionales', 'usr\datosAdicionalesController' );
Route::resource('bajas', 'usr\bajasController' );
Route::resource('contacto', 'usr\contactoController' );
Route::resource('newsletter', 'usr\newsLetterController' );

//Controladores de Ventas
Route::resource('pedidos', 'ventas\pedidosController' );
Route::resource('articulos', 'ventas\articulosController' );
Route::resource('servicios', 'ventas\serviciosController' );
Route::resource('serviciosadicionales', 'ventas\serviciosAdicionalesController' );
Route::resource('promociones', 'ventas\promocionesController' );

//Controladores de Administracion
Route::resource('compras', 'administracion\comprasController' );
Route::resource('proveedores', 'administracion\proveedoresController' );
Route::resource('articuloscomprados', 'administracion\articulosComprasController' );

//Controladores Auxiliares
Route::resource('articulospedidos', 'controladoresAuxiliares\articulosPedidosController' );
Route::resource('serviciospedidos', 'controladoresAuxiliares\serviciosPedidosController' );
Route::resource('serviciosadicionalespedidos', 
'controladoresAuxiliares\serviciosAdicionalesPedidosController' );
Route::resource('promocionespedidos', 'controladoresAuxiliares\promocionesPedidosController' );

/*
Usuarios:
avatarController
datosAdicionalesController
bajasController
contactoController
newsLetterController
Ventas:
pedidosController
articulosController 
serviciosController 
serviciosAdicionalesController
promocionesController 
Administración:
comprasController 
proveedoresController
articulosComprasController
Controladores Auxiliares:
articulosPedidosController 
serviciosPedidosController 
serviciosAdicionalesPedidosController
promocionesPedidosController

*/