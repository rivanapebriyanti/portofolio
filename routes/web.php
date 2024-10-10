<?php

use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardConrtoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login']);
Route::post('/auth', [LoginController::class, 'auth']);
// Route::get('/profile', [UserController::class, 'profile']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'authentikasi']);


Route::middleware('statuslogin')->group(function () {
    //Route Admin
    Route::get('/kontak', [DashboardConrtoller::class, 'kontak']);
    Route::get('/home', [ProdukController::class, 'show']);
    Route::get('/produk', [ProdukController::class, 'show']);
    Route::get('/produk', [ProdukController::class, 'produk']);
    Route::get('/home/create', [ProdukController::class, 'create']);
    Route::post('/home/create', [ProdukController::class, 'add']);
    Route::get('/home/delete/{id}', [ProdukController::class, 'delete']);
    Route::get('/home/update/{id}', [ProdukController::class, 'edit']);
    Route::post('/home/update/{id}', [ProdukController::class, 'update']);
    Route::post('/home', [ProdukController::class, 'search']);
    Route::get('/detail/{id}', [ProdukController::class, 'detail']);


    Route::get('/user', [UserController::class, 'show']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    Route::post('/user', [UserController::class, 'search']);
    Route::get('/user/update/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);

    Route::get('/categorie', [CategorieController::class, 'show']);
    Route::get('/categorie/create', [CategorieController::class, 'create']);
    Route::post('/categorie/create', [CategorieController::class, 'add']);
    Route::get('/categorie/delete/{id}', [CategorieController::class, 'delete']);
    Route::get('/categorie/update/{id}', [CategorieController::class, 'edit']);
    Route::post('/categorie/update/{id}', [CategorieController::class, 'update']);
    Route::post('/categorie', [CategorieController::class, 'search']);


    Route::get('/dashboard' , [ProdukController::class, 'dashboard']);

    Route::get('/transaksi/{id}', [TransaksiController::class, 'transaksi']);
    Route::post('/transaksi/{id}', [TransaksiController::class, 'buy']);
    Route::get('/detail-transaksi/{id}', [TransaksiController::class, 'detail_transaksi']);
    Route::get('/transaksi/delete/{id}', [TransaksiController::class, 'delete']);


    Route::get('/admin-transaksi', [AdminTransaksiController::class, 'show']);
    // Route::get('/admin-transaksi', [AdminTransaksiController::class, 'detail_admin']);
    


    // Route::get('/best',[UserController::class,'best']);

    Route::get('/logout', [LoginController::class, 'logout']);
});
  

