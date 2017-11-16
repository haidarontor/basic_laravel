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

Route::get('/', function() {
    return view('welcome');
});
/*
 * Mastering Route 
 */
Route::get('/', 'homeController@index');
Route::get('/about', 'homeController@aboutFunction');
Route::get('/delivery', 'homeController@deliveryFunction');
Route::get('/preview', 'homeController@previewFunction');

/*
 * Registration
 */
Route::get('/registration','homeController@registration');
Route::post('/registration','homeController@registration_save_info');


/*
 * Admin Route Start
 */

Route::get('/admin-panel', 'AdminController@admin_function');
Route::post('/login-check', 'AdminController@admin_login_check');

Route::get('/dashboard', 'super_admin_controller@index');
Route::get('/logout', 'super_admin_controller@logoutFunction');


/*
 * category route start
 */

Route::get('/add_category', 'super_admin_controller@add_category_function');
Route::post('/save-category', 'super_admin_controller@save_category_function');
Route::get('/manage_category', 'super_admin_controller@manage_category_function');
Route::get('/unpublished-category/{id}', 'super_admin_controller@unpublished_category_function');
Route::get('/published-category/{id}', 'super_admin_controller@published_category_function');
Route::get('/delete-category/{id}', 'super_admin_controller@delete_category_function');


Route::get('/edit-category/{id}', 'super_admin_controller@edit_category_function');
Route::post('/update-category', 'super_admin_controller@update_category_function');


/*
 * Manufacturer route
 * 
 */

Route::get('/add-manufacturer', 'ManufacturerController@index');
Route::get('/manage-manufacturer', 'ManufacturerController@manage_manufacturer_function');

Route::post('/save-manufacturer', 'ManufacturerController@save_manufacturer_function');
Route::get('/unpublished-manufacturer/{id}', 'ManufacturerController@unpublished_manufacturer_function');
Route::get('/published-manufacturer/{id}', 'ManufacturerController@published_manufacturer_function');
Route::get('/delete-manufacturer/{id}', 'ManufacturerController@delete_manufacturer_function');

Route::get('/edit-manufacturer/{id}', 'ManufacturerController@edit_manufacturer_function');
Route::post('/update-manufacturer', 'ManufacturerController@update_manufacturer_function');


/*
 * ADD PRODUCTS ROUTES
 */

Route::get('/add-product', 'ProductController@index');
Route::get('/manage-product', 'ProductController@manage_product_function');
Route::post('/save-product', 'ProductController@save_product_function');
Route::get('/unpublished-product/{id}', 'ProductController@unpublished_product_function');
Route::get('/published-product/{id}', 'ProductController@published_product_function');

Route::get('/delete-product/{id}', 'ProductController@delete_product_function');

Route::get('/edit-product/{id}', 'ProductController@edit_product_function');
Route::post('/update-product', 'ProductController@update_product_function');


/* front end route
 * 
 */

Route::get('/category-product/{id}', 'ProductController@category_product_function');
Route::get('/product-details/{id}', 'ProductController@product_details_function');




/*
 * For cart route
 */


Route::match(['get', 'post'], '/add-to-cart/{product_id}', 'CartController@add_to_cart_function');
Route::get('/show-cart', 'CartController@show_cart_function');
Route::post('/update-cart', 'CartController@update_cart_function');
Route::get('/delete-to-cart/{id}', 'CartController@delete_to_cart_function');

Route::get('/Checkout', 'CartController@checkout_function');



/*
 * check out route
 */

Route::post('/save-customer', 'CheckoutController@save_customer_function');

Route::get('/shipping-address', 'CheckoutController@shipping_address_function');
Route::post('/save-shipping', 'CheckoutController@save_shipping_function');
Route::get('/payment', 'CheckoutController@payment_function');
Route::post('/place-order', 'CheckoutController@place_order');
Route::get('/order-successfull', 'CheckoutController@order_successfull');


/*
 * manage order Route
 */


Route::get('/manage-order', 'OrderController@manage_order');
Route::get('/delete-order/{id}', 'OrderController@delete_order');
Route::get('/in-voice/{id}', 'OrderController@in_voice');
Route::get('/edit-manage-order/{id}', 'OrderController@edit_manage_order');
Route::post('/update-qty', 'OrderController@update_quantity_order_details');

Route::get('/delete-qty/{id}', 'OrderController@delete_qty');

/*
 * for PDF
 */

 
Route::get('/generate-pdf/{id}', 'PDFController@generate_pdf');
 

 























