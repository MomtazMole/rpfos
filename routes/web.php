<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController as BackendCategoryController;
use App\Http\Controllers\Backend;
use App\Http\Controllers\backend\DeliveryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\User;
use Faker\Provider\ar_EG\Payment;
use GuzzleHttp\Middleware;

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

Route::get('/', [FrontendHomeController::class, 'home'])->name('front.home');
Route::get('/login', [FrontendHomeController::class, 'loginform'])->name('front.login');
Route::post('/login/post', [FrontendHomeController::class, 'loginPostt'])->name('front.login.post');
Route::get('/about', [FrontendHomeController::class, 'about'])->name('About.list');
Route::get('/about-us', [FrontendHomeController::class, 'aboutus'])->name('About.us.list');
Route::get('/contact', [FrontendHomeController::class, 'contact'])->name('Contact.list');

Route::get('/cart-view', [CartController::class, 'cartview'])->name('Cart.view');
Route::get('/fresh-cart', [CartController::class, 'fresh_cart'])->name('Fresh_Cart');
Route::post('/order-place', [CartController::class, 'orderPlace'])->name('order.place');
Route::get('/add-to-order/{id}', [CartController::class, 'addtoorder'])->name('add.to.order');
Route::get('/view-details/{id}', [CartController::class, 'viewdetails'])->name('view.details');
Route::get('/menu-under-category/{category_id}',[FrontendMenuController::class,'menuundercategory'])->name('menu.under.category');

Route::get('/search-menu', [FrontendMenuController::class, 'searchmenu'])->name('search.menu');

Route::get('/registration', [FrontendCustomerController::class, 'registration'])->name('customer.registration');
Route::post('/registration', [FrontendCustomerController::class, 'store'])->name('customer.store');

Route::get('/menu', [FrontendMenuController::class, 'menu'])->name('Menu.List');
Route::group(['middleware' => 'auth'], function () {
    Route::post('/order-place', [CartController::class, 'orderPlace'])->name('order.place');
    Route::get('/profile', [FrontendCustomerController::class, 'profile'])->name('User.profile.view');
    Route::get('/order/details/{order_id}', [FrontendCustomerController::class, 'details'])->name('Order_Details');
    Route::get('/logout', [FrontendCustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    // SSLCOMMERZ Start
    Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
    
    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END
    
});






Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [UserController::class, 'loginform'])->name('admin.login');
    Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('login.post');

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/home', [MasterController::class, 'home'])->name('back.home');
        Route::get('/profile', [UserController::class, 'profile'])->name('profile.view');

        Route::get('/', [AdminController::class, 'admin'])->name('Admin_List');
        Route::get('/form', [AdminController::class, 'adminform'])->name('Admin.form');
        Route::post('/store', [AdminController::class, 'adminstore'])->name('Admin.store');
        Route::get('/delete/{id}', [AdminController::class, 'admindelete'])->name('Admin.delete');
        Route::get('/edit/{id}', [AdminController::class, 'adminedit'])->name('Admin.edit');
        Route::put('/update/{id}', [AdminController::class, 'adminupdate'])->name('Admin.update');
        Route::get('/view/{id}', [AdminController::class, 'adminview'])->name('Admin.view');



        Route::get('/category/list', [CategoryController::class, 'list'])->name('Category.list');
        Route::get('/category/form', [CategoryController::class, 'form'])->name('Category.form');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('Category.store');
        Route::get('/category/delete/{category_id}', [CategoryController::class, 'delete'])->name('delete_category');

        Route::get('/customer/list', [CustomerController::class, 'list'])->name('Customer.list');
        Route::get('/customer/form', [CustomerController::class, 'form'])->name('Customer.form');
        Route::post('/customer/store', [CustomerController::class, 'store'])->name('Customer.store');

        Route::get('/menu/list', [MenuController::class, 'list'])->name('Menu.list');
        Route::get('/menu/form', [MenuController::class, 'form'])->name('Menu.form');
        Route::post('/menu/store', [MenuController::class, 'store'])->name('Menu.store');
        Route::get('/menu/delete/{id}', [MenuController::class, 'menudelete'])->name('Menu.delete');


        Route::get('/order/list', [OrderController::class, 'list'])->name('Order.list');
        Route::post('/order/store', [OrderController::class, 'store'])->name('Order.store');

        Route::get('/payment/list', [PaymentController::class, 'list'])->name('Payment.list');
        Route::post('/payment/store', [PaymentController::class, 'store'])->name('Payment.store');

        Route::get('/delivery', [DeliveryController::class, 'print'])->name('Delivery.print');
        Route::get('/delivery/list', [DeliveryController::class, 'list'])->name('Delivery.man.list');
        Route::get('/delivery/form', [DeliveryController::class, 'form'])->name('Delivery.man.form');
        Route::post('/delivery/store', [DeliveryController::class, 'store'])->name('Delivery.man.store');
        Route::get('/delivery/delete/{deliveryMan_id}', [DeliveryController::class, 'delete'])->name('Delivery.man.delete');
    });
});
