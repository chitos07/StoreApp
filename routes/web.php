<?php

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
    return view('auth.login');
});


Route::get('/test', function(){

        return view('test');
});




// Users Routes


Route::get('/users', 'UsersController@index')->name('users.index');


// ProductCategorie Routes

Route::get('/productcategories', 'ProductCategories@index')->name('productcat');

Route::get('/productcategories/create', 'ProductCategories@create')->name('procat_create');

Route::post('/productcategories', 'ProductCategories@store')->name('procat_store');

Route::get('/productcategories/{Products_Categories:id}/edit', 'ProductCategories@edit')->name('procat_edit');

Route::patch('/productcategories/{Products_Categories:id}', 'ProductCategories@update')->name('procat_update');

Route::get('/productcategories/{Products_Categories:id}/delete', 'ProductCategories@delete')->name('procat_delete');


// Products Route


Route::get('/product' , 'ProductController@index')->name('product.index');

Route::get('/product/create' , 'ProductController@create')->name('product_create');

Route::post('/product', 'ProductController@store')->name('product_store');


Route::get('/product/{Product:id}/edit' , 'ProductController@edit')->name('product_edit');

Route::patch('/product/{Product:id}', 'ProductController@update')->name('product_update');

Route::get('/product/{Product:id}/delete' , 'ProductController@delete')->name('product_delete');



//  Expenses Routes


Route::get('/Expenses', 'ExpensesController@index');

Route::get('/Expenses/create', 'ExpensesController@create')->name('expenses.create');

Route::post('/Expenses', 'ExpensesController@store')->name('expenses.store');

Route::get('/Expenses/{Expenses:id}/edit', 'ExpensesController@edit')->name('expenses.edit');


Route::patch('/Expenses/{Expenses:id}', 'ExpensesController@update')->name('expenses.update');

Route::get('/Expenses/{Expenses:id}/delete', 'ExpensesController@delete')->name('expenses.delete');


// Packages

Route::get('/Packages', 'PackagesController@index')->name('Packages.index');

Route::get('/Packages/create', 'PackagesController@create')->name('Packages.create');

Route::post('/Packages', 'PackagesController@store')->name('Packages.store');

Route::get('/Packages/{Packages:id}/edit', 'PackagesController@edit')->name('Packages.edit');


Route::patch('/Packages/{Packages:id}', 'PackagesController@update')->name('Packages.update');

Route::get('/Packages/{Packages:id}/delete', 'PackagesController@destroy')->name('Packages.delete');


// Sales Invoices Route


Route::get('/Sales', 'SaleController@index')->name('sales.index');

Route::get('/Sales/create', 'SaleController@create')->name('sales.create');

Route::post('/Sales', 'SaleController@store')->name('sales.store');

Route::get('/Sales/{Sales:id}/delete', 'SaleController@destroy')->name('Sales.delete');

//  Invoices Routes

Route::get('/Invoices', 'InvoicesController@index')->name('sales.invoices');

Route::get('/Invoices/create', 'InvoicesController@create')->name('invoices.create');

Route::post('/Sales', 'InvoicesController@store')->name('sales.store');

Route::get('/Invoices/show/{SalesInvoices:id}', 'InvoicesController@show')->name('invoices.show');

Route::get('/Invoices/{SalesInvoices:id}/delete', 'InvoicesController@destroy')->name('invoices.delete');

Route::get('/Invoices/editprodut/{SalesInvoices:id} ', 'InvoicesController@editproduct')->name('editproduct');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
