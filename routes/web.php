<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;   
use App\Http\Controllers\SpController;  
use App\Http\Controllers\LoaispController;    
use App\Http\Controllers\CustomersController;  
use App\Http\Controllers\UserController;  
use App\Http\Controllers\NhaccController; 
use App\Http\Controllers\LienheController;
use App\Http\Controllers\BillController;
use App\Http\Middleware\AdminLoginMiddleware;        

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
Route::get('/c', function () {
    return view('account');
});



Route::get('/tc',[SpController::class, 'index']);
Route::get('/',[SpController::class, 'index'])->name('trangchu.trangchu');

Route::get('/input-email',[UserController::class,'getInputEmail'])->name('getInputEmail');
Route::post('/input-email',[UserController::class,'postInputEmail'])->name('postInputEmail');


Route::get('/input-lienhe',[LienheController::class,'getInputLienhe'])->name('getInputLienhe');
Route::post('/input-lienhe',[LienheController::class,'postInputLienhe'])->name('postInputLienhe');



//đăng ký và đăng nhập của khách hàng
Route::get('/dangky',[SpController::class,'getSignin'])->name('getSignin');
Route::post('/dangky',[SpController::class,'postSignin'])->name('postSignin');

Route::get('/search', [SpController::class,'search'])->name('search');


Route::get('/cart',[SpController::class,'cart'])->name('cart');
Route::get('add-to-cart/{id}',[SpController::class,'addToCart'])->name('banhang.addToCart');
Route::get('del-cart/{id}',[SpController::class,'delCartItem'])->name('banhang.xoagiohang');
Route::get('Checkout',[SpController::class,'getCheckout'])->name('banhang.getdathang');
Route::post('Checkout',[SpController::class,'postCheckout'])->name('banhang.postdathang');

Route::get('/loaisp',[SpController::class,'getLoaisp'])->name('getLoaisp');

Route::get('/account',[UserController::class,'getAccount'])->name('getAccount');

Route::get('/{id}',[SpController::class, 'show'])->name('show'); 

/*------ phần quản trị ----------*/
Route::get('admin/dangnhap',[UserController::class,'getLogin'])->name('admin.getLogin');
Route::post('admin/dangnhap',[UserController::class,'postLogin'])->name('admin.postLogin');
Route::get('admin/dangxuat', [UserController::class, 'getLogout'])->name('admin.getLogout');




Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
   
    Route::group(['prefix'=>'category'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[CategoryController::class,'getCateList'])->name('admin.getCateList');
        // admin/category/them
        Route::get('them',[CategoryController::class,'getCateAdd'])->name('admin.getCateAdd');
        Route::post('them',[CategoryController::class,'postCateAdd'])->name('admin.postCateAdd');
        Route::delete('xoa/{id}',[CategoryController::class,'getCateDelete'])->name('admin.getCateDelete');
        Route::get('sua/{id}',[CategoryController::class,'getCateEdit'])->name('admin.getCateEdit');
        Route::put('sua/{id}',[CategoryController::class,'postCateEdit'])->name('admin.postCateEdit');
    });
    Route::group(['prefix'=>'bill'],function(){
        Route::get('danhsachbill',[BillController::class,'listBillAll'])->name('admin.listBillAll');
        // admin/bill/{status}
        Route::get('{status}',[BillController::class,'getBillList'])->name('admin.getBillList');
        //phần bill này không nhất thiết phải dùng request ajax, làm như những hàm bình thường, phần route này cô vẫn để lại để tham khảo
        //by laravel request
        Route::get('{id}/{status}',[BillController::class,'updateBillStatus'])->name('admin.updateBillStatus');
        //by ajax request
        Route::post('updatebill/{id}', [BillController::class, 'updateBillStatusAjax'])->name('admin.updateBillStatusAjax');
       
        Route::delete('deletebill/{id}',[BillController::class,'cancelBill'])->name('admin.cancelBill');
});
    Route::group(['prefix'=>'loaisp'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[LoaispController::class,'getLoaispList'])->name('admin.getLoaispList');
        // admin/category/them
        Route::get('them',[LoaispController::class,'getLoaispAdd'])->name('admin.getLoaispAdd');
        Route::post('them',[LoaispController::class,'postLoaispAdd'])->name('admin.postLoaispAdd');
        Route::delete('xoa/{id}',[LoaispController::class,'getLoaispDelete'])->name('admin.getLoaispDelete');
        Route::get('sua/{id}',[LoaispController::class,'getLoaispEdit'])->name('admin.getLoaispEdit');
        Route::put('sua/{id}',[LoaispController::class,'postLoaispEdit'])->name('admin.postLoaispEdit');
    });
    Route::group(['prefix'=>'customers'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[CustomersController::class,'getCustomersList'])->name('admin.getCustomersList');
        // admin/category/them
        Route::get('sua/{id}',[CustomersController::class,'getCustomersEdit'])->name('admin.getCustomersEdit');
        Route::put('sua/{id}',[CustomersController::class,'postCustomersEdit'])->name('admin.postCustomersEdit');
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('danhsach',[UserController::class,'index'])->name('admin.getUserList');
        Route::get('sua/{id}',[UserController::class,'edit'])->name('admin.getUserEdit');
        Route::put('sua/{id}',[UserController::class,'update'])->name('admin.postUserEdit');
        Route::delete('xoa/{id}',[UserController::class,'destroy'])->name('admin.getUserDelete');
    });
    Route::group(['prefix'=>'nhacc'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[NhaccController::class,'getNhaccList'])->name('admin.getNhaccList');
        // admin/category/them
        Route::get('them',[NhaccController::class,'getNhaccAdd'])->name('admin.getNhaccAdd');
        Route::post('them',[NhaccController::class,'postNhaccAdd'])->name('admin.postNhaccAdd');
        Route::delete('xoa/{id}',[NhaccController::class,'getNhaccDelete'])->name('admin.getNhaccDelete');
        Route::get('sua/{id}',[NhaccController::class,'getNhaccEdit'])->name('admin.getNhaccEdit');
        Route::put('sua/{id}',[NhaccController::class,'postNhaccEdit'])->name('admin.postNhaccEdit');
    });
    Route::group(['prefix'=>'lienhe'],function(){
        Route::get('danhsach',[LienheController::class,'getLienheList'])->name('admin.getLienheList');
        Route::delete('xoa/{id}',[LienheController::class,'getLienheDelete'])->name('admin.getLienheDelete');
    });


});


