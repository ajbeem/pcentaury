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
Route::resource('usuarios','Usuarios\UsuariosController');
Route::resource('avatar', 'Usuarios\AvatarController' );
Route::resource('datosadicionales', 'Usuarios\DatosAdicionalesController' );
Route::resource('bajas', 'Usuarios\BajasController' );
Route::resource('contacto', 'Usuarios\ContactoController' );
Route::resource('newsletter', 'Usuarios\NewsLetterController' );

//Controladores de Ventas
Route::resource('articulos', 'Ventas\ArticulosController' );
Route::resource('pedidos', 'Ventas\PedidosController' );
Route::resource('promociones', 'Ventas\PromocionesController' );
Route::resource('proveedores', 'Ventas\ProveedoresController' );
Route::resource('servicios', 'Ventas\ServiciosController' );
Route::resource('serviciosadicionales', 'Ventas\ServiciosAdicionalesController' );


//Controladores de Administracion
Route::resource('compras', 'Administracion\ComprasController' );

//Controladores Auxiliares
Route::resource('articuloscompras', 'CtrlAuxiliares\ArticulosComprasController' );
Route::resource('articulospedidos', 'CtrlAuxiliares\ArticulosPedidosController' );
Route::resource('serviciospedidos', 'CtrlAuxiliares\ServiciosPedidosController' );
Route::resource('serviciosadicionalespedidos', 
'CtrlAuxiliares\ServiciosAdicionalesPedidosController' );
Route::resource('promocionespedidos', 'CtrlAuxiliares\PromocionesPedidosController' );

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