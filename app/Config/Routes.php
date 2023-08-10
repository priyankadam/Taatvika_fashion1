<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// ------------------Admin Routes-----------------------------------------------------------------

$routes->get('/admin', 'Admincontroller::login', ['as' => 'admin.login']);
$routes->get('/admin/', 'Admincontroller::index');
$routes->post('/admin/loginsubmit', 'Admincontroller::loginsubmit', ['as' => 'admin.loginsubmit']);

$routes->group('',['filter'=>'isAdminLoggedin'],function($routes){

//$routes->get('/admin/boxes', 'Admincontroller::box', ['as' => 'admin.box']);
$routes->get('/admin/dashboard', 'Admincontroller::dashboard', ['as' => 'admin.dashboard']);
$routes->get('/admin/logout', 'Admincontroller::logout',['as' => 'admin.logout']);

$routes->get('/admin/banner', 'Admincontroller::Banner');
$routes->post('admin/addbanner', 'Admincontroller::addbanner');
$routes->get('admin/getAllBanner', 'Admincontroller::getAllBanner');
$routes->post('admin/editbanner', 'Admincontroller::editbanner');
$routes->post('admin/Updatebanner', 'Admincontroller::Updatebanner');
$routes->post('admin/Bannerdelete', 'Admincontroller::Bannerdelete');
// ----------mensAdmin----------------
$routes->get('admin/Add-Mens-Product', 'menController::AddMensProduct');
$routes->post('admin/Add-Product', 'menController::MensProduct');
// ----------mensFront----------------
// $routes->get('Men-Wear/(:any)', 'menController::men/$1');
// $routes->get('Men-Product-Details/(:any)','menController::productdetail/$1');
// ------------------------------
$routes->get('admin/Add-Womens-Product', 'womenController::AddWomensProduct');
$routes->post('admin/Add-W-Product', 'womenController::WomensProduct');

$routes->get('admin/Collection', 'collectionController::AddCollection');
$routes->post('admin/Add-C-Product', 'collectionController::CollectionProduct');

$routes->get('/admin/accessories', 'accessoriesController::Accessories');
$routes->post('/admin/getAccessories', 'accessoriesController::getAccessories');
$routes->post('admin/Add-Accessories', 'accessoriesController::add_accessories');

$routes->get('/admin/megaBoxes', 'Admincontroller::mega_boxview');
$routes->post('admin/Add-megaImages', 'Admincontroller::add_mega_img');
$routes->get('admin/getAllmegabox', 'Admincontroller::getAllmegabox');
$routes->post('admin/editmegabox', 'Admincontroller::editmegabox');
$routes->post('admin/Updatemegabox', 'Admincontroller::Updatemegabox');
$routes->post('admin/megaboxdelete', 'Admincontroller::megaboxdelete');
$routes->post('admin/megaboxactive', 'Admincontroller::megaboxactive');

$routes->get('/admin/miniBanner', 'Admincontroller::mini_bannerview');
$routes->post('admin/Add-MiniBanImage', 'Admincontroller::add_miniBanner_img');
$routes->get('admin/getAllminibanner', 'Admincontroller::getAllminibanner');
$routes->post('admin/editminibanner', 'Admincontroller::editminibanner');
$routes->post('admin/Updateminibanner', 'Admincontroller::Updateminibanner');
$routes->post('admin/miniBannerdelete', 'Admincontroller::miniBannerdelete');
$routes->post('admin/miniBanneractive', 'Admincontroller::miniBanneractive');



$routes->get('admin/notification', 'NotificationController::notification');
$routes->get('admin/getNotification', 'NotificationController::getNotification');
$routes->post('admin/editNotification', 'NotificationController::editNotification');
$routes->post('admin/UpdateNotification', 'NotificationController::UpdateNotification');



$routes->get('/admin/boxes', 'BoxController::boxview');
$routes->get('/admin/create-box', 'BoxController::add_box_img_view');
$routes->post('admin/insertbox', 'BoxController::add_box_img');
$routes->post('admin/addbox', 'BoxController::add_box_img');
$routes->get('admin/getAllboxes', 'Admincontroller::getAllboxes');
$routes->post('admin/editboxes', 'Admincontroller::editboxes');
$routes->post('admin/boxesdelete', 'Admincontroller::boxesdelete');
$routes->post('admin/boxesactive', 'Admincontroller::boxesactive');
$routes->post('admin/Updateboxes', 'Admincontroller::Updateboxes');

$routes->post('/updatebox', 'BoxController::updatebox');

$routes->get('admin/List-Product', 'Admincontroller::listProduct');
$routes->post('admin/getcat', 'Admincontroller::getcat');
$routes->post('admin/showsubcategories', 'Admincontroller::showsubcategories');

$routes->get('/admin/userlist', 'Admincontroller::users_list');
$routes->get('admin/getAllUsers', 'Admincontroller::getAllUsers');

$routes->get('/admin/view_user/(:num)', 'Admincontroller::view_user/$1');

$routes->get('/admin/paymentReport', 'Admincontroller::payment_view');
 $routes->get('/admin/getAllPayment', 'Admincontroller::getAllPayment');
 
$routes->get('admin/orders', 'Admincontroller::orders');
$routes->get('admin/ordersget', 'Admincontroller::ordersget');
$routes->post('admin/get-edit-orders', 'Admincontroller::orderstoedit');
$routes->post('admin/statusupdate', 'Admincontroller::orderupdate');
$routes->post('admin/view-order', 'Admincontroller::vieworder');
$routes->post('admin/productdelete', 'Admincontroller::productdelete');
$routes->get('admin/shippingPolicy', 'Admincontroller::shipping_view');
$routes->post('admin/addPolicy', 'Admincontroller::addShippingPolicy');

$routes->get('admin/size_materialView', 'Admincontroller::size_materialView');
    $routes->post('admin/addSizeMaterial', 'Admincontroller::addSizeMaterial');

    $routes->get('admin/fit_fabricView', 'Admincontroller::fit_fabricView');
    $routes->post('admin/addFitFabric', 'Admincontroller::addFitFabric');
    
    $routes->post('admin/editproductDetails', 'Admincontroller::editproductDetails');
    $routes->post('admin/UpdateProduct', 'Admincontroller::UpdateProduct');

    $routes->post('admin/getSearchCat', 'Admincontroller::getSearchCat');
});

// ------------Frontend Routes---------------------------------------------------------------------

//New Route after requirement changes
$routes->get('Payment-Success', 'checkout::pay');
$routes->get('Men-Wear/(:any)', 'menController::men/$1');
$routes->get('Men-Product-Details/(:any)','menController::productdetail/$1');

$routes->get('Women-Wear/(:any)', 'womenController::women/$1');
$routes->get('Women-Product-Details/(:any)','womenController::productdetail/$1');

$routes->post('Add-To-Cart','AddtoCartController::Addtocart');

$routes->post('Add-to-cart-customise', 'customiseController::cus_order');

$routes->get('test/(:any)', 'Checkout::test/$1');
$routes->get('test1/(:any)', 'Checkout::test1/$1');
$routes->get('Billing-Details', 'Checkout::BillingDetails');
$routes->get('Billing-Detail', 'Checkout::BillingDetail');////unregistered user
$routes->post('Continue-To-Payment', 'Register::updateUser');
$routes->post('ContinueToPayment', 'Register::ADDUser');
$routes->get('/', 'Home::index');
$routes->get('Men-Wear', 'Home::MensView');///view return w/o args
// $routes->get('Men-Wear/(:any)', 'Checkout::test/$1');//with ags
$routes->get('Women-Wear', 'Home::WomensView');
$routes->get('Women-Wear/(:any)', 'Checkout::testw/$1');
$routes->get('Accessories', 'Home::AccessoriesView');
$routes->get('Accessories/(:any)', 'Checkout::testAW/$1');
$routes->get('Accessoriess', 'Home::AccessoriessView');
$routes->get('Accessoriess/(:any)', 'Checkout::testAM/$1');
$routes->get('Men-Wears', 'Home::Mens');
$routes->get('Product', 'Home::singleProduct');
$routes->get('ProductSuit','Home::suitProduct');
$routes->get('WomenProduct','Home::WomenProductView');
$routes->get('CollectionProduct','Home::CollectionProductView');
$routes->get('WomenAccProduct','Home::WomenAccProductView');
$routes->get('MenAccProduct','Home::MenAccProductView');
$routes->get('Product-Details/(:any)','Home::Product/$1');
$routes->get('WomenProduct-Details/(:any)','Home::WomenProduct/$1');
$routes->get('CollectionProduct-Details/(:any)','Home::CollectionProduct/$1');
$routes->get('AcessoriesProduct-Details/(:any)','Home::AcessoriesProduct/$1');
$routes->get('AcessoriessProduct-Details/(:any)','Home::AcessoriessProduct/$1');
$routes->get('Collection', 'Home::Collection');
$routes->get('Collection/(:any)', 'Checkout::testc/$1');
$routes->get('View-Cart', 'Home::ViewCart');
$routes->get('Wish-list', 'Home::wishlist');
$routes->get('Checkout', 'Home::checkout');
$routes->get('Login', 'Home::login');
$routes->get('Logout', 'Home::logout');
$routes->post('logincheck', 'Register::logincheck');
$routes->get('Create-Account', 'Home::Register');
$routes->post('Register', 'Register::register');
$routes->get('Add-to-cart/(:any)/(:alpha)/(:alpha)', 'Home::addtocart/$1/$2/$3');
$routes->post('Payment', 'Checkout::payment');
$routes->post('remove_item', 'Home::remove_item');
$routes->get('My-Account', 'Home::myaccount');
$routes->get('About-us', 'Home::aboutus');
$routes->get('Payment_success/(:any)','Checkout::payment_success/$1');
$routes->post('EditAddress','Home::EditAddress');
$routes->post('addReview','Home::addReview');
$routes->post('/submitreview','Home::submitreview');


$routes->get('Add-to-cart-Home/(:any)/(:alpha)/(:alpha)', 'Home::addtoCartnewArrive/$1/$2/$3');
$routes->get('singleProduct', 'Home::singleProduct');
$routes->post('My-customise', 'Home::customizeSize');
$routes->post('My-customise-w', 'Home::customizeSizew');
$routes->post('My-customise-c', 'Home::customizeSizec');

$routes->post('Add-to-cart-customise-single', 'customiseController::cus_single_order');
$routes->post('My-customise-single', 'Home::customiseView');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
