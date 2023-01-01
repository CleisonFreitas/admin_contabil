<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard.home');
})->name('dashboard');

Route::get('/customers', function () {
    return view('pages.clientes.customers');
})->name('customers');

Route::get('/suppliers', function () {
    return view('pages.fornecedores.fornecedores');
})->name('fornecedores');

Route::get('/cost-center', function () {
    return view('pages.centro-custos.centro-custo');
})->name('centro-custo');

Route::get('/payment-way', function () {
    return view('pages.formas-pagamento.formas-pagamento');
})->name('forma-pagamento');

Route::get('/bill-to-pay', function () {
    return view('pages.contas-pagar.conta-pagar');
})->name('conta-pagar');

Route::get('/bills-planning', function () {
    return view('pages.plano-contas.plano-contas');
})->name('plano-contas');

Route::get('/customers/formulario/{id?}', function () {
    return view('pages.clientes.form_customers');
})->name('form_customers');

Route::get('/settings/users', function () {
    return view('pages.gerenciador.usuario');
})->name('users');

Route::get('/settings/group-users', function () {
    return view('pages.gerenciador.grupo-usuario');
})->name('group-users');
