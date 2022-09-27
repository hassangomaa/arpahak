<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticationController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShareUSController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MetalController;
use App\Http\Controllers\MetalMessageController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\AdCategoryController;






use App\Http\Controllers\User\HomeController;



use App\Http\Controllers\User\PayPalController;
use App\Http\Controllers\User\vodafoneController;
use App\Http\Controllers\User\bankController;
use App\Http\Controllers\User\SocialApiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\ImageController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\CompetitionMessageController;
use Illuminate\Support\Facades\Route;


// Guests' Routes
Route::group(['name'=>'guests'],function (){
    Route::get('/', [Controller::class,'index'])->name('index');
    Route::get('/homepage', [Controller::class,'home'])->name('homepage');
    Route::get('/services', [Controller::class, 'services'])->name('home.services');
    Route::get('/trading', [Controller::class, 'trading'])->name('home.trading');


    Route::get('/share_us', [ShareUSController::class,'index'])->name('share.us');
    Route::post('/share_us', [ShareUSController::class,'store'])->name('share.us.message');
    Route::get('/competition',[CompetitionController::class,'show'])->name('show.competitions');
    Route::get('/gallery',[ImageController::class,'index'])->name('gallery');
    Route::get('/ads',[AdsController::class,'index'])->name('ads');
    Route::get('/ad/{id}',[AdsController::class,'getAd'])->name('view.ad');
    Route::get('/ads/delete-ad/{id}',[AdsController::class,'declineAd'])->name('delete.ad');






    //    Route::get('/trading',[TradingController::class,'index'])->name('trading');


    Route::get('/team',[LandingController::class,'team'])->name('team');
    Route::get('/privacy_policy',[LandingController::class,'privacyAndPolicy'])->name('privacy.policy');
    /////////////-----------------country City with Ajax-------------------------//////////////
    Route::get('country-state-city','CountryStateCityController@index');
    Route::post('get-states-by-country','CountryStateCityController@getState');
    Route::post('get-cities-by-state','CountryStateCityController@getCity');



});




//Authentication's Routes
Auth::routes(['verify' => true]);
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');



//Dashboard's Routes for users
Route::group(['middleware'=> ['verified','auth','disable_back']],function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/edit_password',[HomeController::class,'edit_password'])->name('edit.password');
    Route::post('/update_password',[HomeController::class,'update_password'])->name('update.password');
    Route::get('/balance',[HomeController::class,'balance'])->name('user.balance');

    Route::post('/competiton',[CompetitionMessageController::class,'store'])->name('message.guest.competitions');

    //Socials' Api Routes
    Route::get('/youtube/video/{id}',[SocialApiController::class,'youtube_video'])->name('youtube.video');

    Route::get('/facebook/{id}',[SocialApiController::class,'facebook'])->name('facebook');
    Route::get('/tiktok/{id}',[SocialApiController::class,'tiktok'])->name('tiktok');

    Route::get('/my_tasks',[HomeController::class,'myTasks'])->name('user.tasks');

    Route::get('/new/order',[UserServiceController::class,'create'])->name('add.order');
    Route::post('/new/order',[UserServiceController::class,'store'])->name('store.order');
    Route::get('/get_services/{TypeId}',[UserServiceController::class,'GetServices'])->name('GetServices');
    Route::get('/orders',[UserServiceController::class,'index'])->name('MyOrders');

        //----------------Metals And Trends-------------//
        //Route::get('/my_deals',[UserServiceController::class,'index'])->name('user.deals');
        Route::get('/user/add_trade',[TradeController::class,'create'])->name('user.add.trade');
        Route::post('/user/add_trade',[TradeController::class,'store'])->name('user.store.trade');
        Route::get('/user/my-trades',[TradeController::class,'index'])->name('user.my.trades');
        Route::get('/user/get-metals-price/{id}',[MetalMessageController::class,'getMetalPrice'])->name('user.metal.price');
        Route::get('/user/available-trades',[TradeController::class,'availableTrades'])->name('avilable.trades');



        Route::get('/my_deals/buy/{id}',[UserServiceController::class,'BuyForm'])->name('user.buy');
        Route::post('/my_deals/buy/store',[UserServiceController::class,'BuyStore'])->name('user.buy.store');
        Route::get('/my_deals/sell/{id}',[UserServiceController::class,'SellForm'])->name('user.sell');
        Route::post('/my_deals/sell/store',[UserServiceController::class,'SellStore'])->name('user.sell.store');
     //    Route::get('/deals',[\App\Http\Controllers\MetalController::class,'show'])->name('show.metals');
     //    Route::get('/deals',[\App\Http\Controllers\MetalController::class,'show'])->name('show.metals');


    Route::get('/add_image',[ImageController::class,'create'])->name('add.image');
    Route::post('/add_image',[ImageController::class,'store'])->name('store.image');
    Route::get('/my_images',[ImageController::class,'getImages'])->name('myImages');

            //----------------ads-------------//
    Route::get('/post-ad',[AdsController::class,'create'])->name('post.ad');
    Route::post('/post-ad',[AdsController::class,'store'])->name('store.ad');

    //----------------------Payment ---------------------//
    Route::get('/payment/vodafone-cash/{id}',[vodafoneController::class,'pay_page'])->name('vodafone-cash');
    Route::post('/payment/vodafone-cash/image',[vodafoneController::class,'uploadFile'])->name('vodafone-image');
    Route::get('/payment/bank-transfer/{id}',[bankController::class,'pay_page'])->name('bank-transfer');
    Route::post('/payment/bank-transfer/image',[bankController::class,'uploadFile'])->name('bank-image');

    //-------------Payments NEW----------////
    Route::get('paypal/{id}', [\App\Http\Controllers\PaymentController::class, 'pay_page'])->name('paypal-form');
    Route::post('pay', [\App\Http\Controllers\PaymentController::class, 'pay'])->name('payment.paypal');
    Route::get('success', [\App\Http\Controllers\PaymentController::class, 'success']);
    Route::get('error', [\App\Http\Controllers\PaymentController::class, 'error']);
////////////////////////////////////////PAY pallllll$$$$$
/////
//    Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
//    Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
//    Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
//    Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');



});



//Dashboard's Routes for admins
Route::group(['middleware'=>['verified','checkUserRole','auth','disable_back'],'prefix'=>'admin'],function(){
    //-------------Dashboard------------------//
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/users',[AdminController::class,'users'])->name('users');
    Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout');


    //-------------Messages------------------//
    Route::get('/show_messages',[AdminController::class,'showMessages'])->name('show.messages');
    Route::get('/delete/{id}',[ShareUSController::class,'destroy'])->name('show.message.destroy');


    //------------------Search by date---------------------//
    Route::post('/search',[AdminController::class,'filterMessagesByDate'])->name('search.messages');


    //-------------Tasks------------------//
    Route::get('/add_task',[AdminController::class,'addTasks'])->name('add.tasks');
    Route::post('/add_task',[AdminController::class,'addNewTask'])->name('add.new.task');
    Route::get('/tasks',[TaskController::class,'index'])->name('all.tasks');
    Route::get('/edit_task/{id}',[TaskController::class,'edit'])->name('task.edit');
    Route::post('/edit_task/{id}',[TaskController::class,'update'])->name('task.update');
    Route::get('/delete_task/{id}',[TaskController::class,'destroy'])->name('task.destroy');


    //-------------Competition------------------//
    Route::get('/competitions',[CompetitionController::class,'index'])->name('competitions');
    Route::get('/add_competition',[CompetitionController::class,'create'])->name('add.new.competition');
    Route::post('/add_competition',[CompetitionController::class,'store'])->name('add.competition');
    Route::get('/edit_competition/{id}',[CompetitionController::class,'edit'])->name('competition.edit');
    Route::post('/edit_competition/{id}',[CompetitionController::class,'update'])->name('competition.update');
    Route::get('/delete_competition/{id}',[CompetitionController::class,'destroy'])->name('competition.destroy');
    Route::get('/all_competitions_messages',[CompetitionMessageController::class,'index'])->name('show.competition.messages');
    Route::get('/delete_message/{id}',[CompetitionMessageController::class,'destroy'])->name('competition.message.destroy');


    //-------------Images------------------//
    Route::get('/images',[AdminController::class,'confirmImages'])->name('confirm.images');
    Route::get('/pending-images',[ImageController::class,'pendingImages'])->name('pending.images');
    Route::get('/accept-image/{id}',[ImageController::class,'acceptImage'])->name('accept.image');
    Route::get('/decline-image/{id}',[ImageController::class,'declineImage'])->name('decline.image');
    Route::get('/accepted_images',[ImageController::class,'acceptedImages'])->name('accepted.images');
    Route::get('/delete_image/{id}',[ImageController::class,'destroy'])->name('delete.image');


    //-------------Services Categories------------------//
    Route::get('/add_category',[ServiceCategoryController::class,'create'])->name('add.service.category');
    Route::post('/add_category',[ServiceCategoryController::class,'store'])->name('store.service.category');
    Route::get('/service/categories',[ServiceCategoryController::class,'index'])->name('service.categories');
    Route::get('/edit_category/{id}',[ServiceCategoryController::class,'edit'])->name('edit.service.category');
    Route::post('/edit_category/{id}',[ServiceCategoryController::class,'update'])->name('update.service.category');
    Route::get('/delete_category/{id}',[ServiceCategoryController::class,'destroy'])->name('destroy.service.category');


    //-------------Services Types------------------//
    Route::get('/add_sub_category',[ServiceTypeController::class,'create'])->name('add.service.subCategory');
    Route::post('/add_sub_category',[ServiceTypeController::class,'store'])->name('store.service.subCategory');
    Route::get('/service/types',[ServiceTypeController::class,'index'])->name('service.subCategory');
    Route::get('/edit_type/{id}',[ServiceTypeController::class,'edit'])->name('edit.service.subCategory');
    Route::post('/edit_type/{id}',[ServiceTypeController::class,'update'])->name('update.service.subCategory');
    Route::get('/delete_type/{id}',[ServiceTypeController::class,'destroy'])->name('destroy.service.subCategory');

    //-------------Services------------------//
    Route::get('/add_service',[ServiceController::class,'create'])->name('add.service');
    Route::post('/add_service',[ServiceController::class,'store'])->name('store.service');
    Route::get('/types/{CatId}',[ServiceController::class,'GetCategoryTypes'])->name('add.service.GetTypes');
    Route::get('/services',[ServiceController::class,'index'])->name('services.list');
    Route::get('/delete_service/{id}',[ServiceController::class,'destroy'])->name('destroy.service');
    Route::get('/edit_service/{id}',[ServiceController::class,'edit'])->name('edit.service');
    Route::post('/edit_service/{id}',[ServiceController::class,'update'])->name('update.service');
    Route::get('/orders',[ServiceController::class,'ShowOrders'])->name('ShowOrders');
    Route::get('/orders/accept/{id}',[ServiceController::class,'AcceptOrder'])->name('AcceptOrder');
    Route::get('/orders/decline/{id}',[ServiceController::class,'DeclineOrder'])->name('DeclineOrder');
    Route::get('/orders/accpeted',[ServiceController::class,'ShowAcceptedOrders'])->name('ShowAcceptedOrders');
    Route::get('/orders/declined',[ServiceController::class,'ShowDeclinedOrders'])->name('ShowDeclinedOrders');

    //----------------------Metals TRENDS---------------------//
    Route::get('/add-metal',[MetalController::class,'addMetal'])->name('add.metal');
    Route::post('/add-metal',[MetalController::class,'storeMetal'])->name('store.metal');
    Route::get('/show-metals',[MetalController::class,'index'])->name('show.metal');
    Route::get('/edit-metal/{id}',[MetalController::class,'editmetalpage'])->name('edit.metal');
    Route::post('/edit-metal/{id}',[MetalController::class,'editMetal'])->name('store.edit.metal');
    Route::get('/delete-metal/{id}',[MetalController::class,'destroy'])->name('delete.metal');
    Route::get('/add_trade',[MetalMessageController::class,'create'])->name('add.trade');
    Route::post('/add_trade',[MetalMessageController::class,'store'])->name('store.trade');
    Route::get('/pending-trades',[TradeController::class,'pendingTrades'])->name('admin.pending.trades');
    Route::get('/get-metals-price/{id}',[MetalMessageController::class,'getMetalPrice'])->name('metal.price');
    Route::get('/accept-trade/{id}',[TradeController::class,'acceptTrades'])->name('admin.accept.trades');
    Route::get('/decline-trade/{id}',[TradeController::class,'declineTrades'])->name('admin.decline.trades');



    Route::get('/all_trades',[\App\Http\Controllers\ServiceController::class,'show'])->name('show.trades');
    Route::get('/all_traders_messages',[\App\Http\Controllers\MetalMessageController::class,'index'])->name('show.traders.messages');
    //Route::post('/add_metal/store',[\App\Http\Controllers\MetalMessageController::class,'store'])->name('add.services.store');
    Route::post('/update_traders_messages/{id}',[\App\Http\Controllers\MetalMessageController::class,'update'])->name('update.traders.messages');
    Route::post('/destroy_traders_messages/{id}',[\App\Http\Controllers\MetalMessageController::class,'destroy'])->name('destroy.traders.messages');
    /////////////////////////-----------
    //Route::post('/update_service/{id}',[\App\Http\Controllers\ServiceController::class,'update'])->name('edit.service');
    //Route::post('/destroy_service/{id}',[\App\Http\Controllers\ServiceController::class,'destroy'])->name('destroy.service');
//    Route::get('/delete_metal_message/{id}',[\App\Http\Controllers\MetalMessageController::class,'destroy'])->name('competition.message.destroy');




    //----------------------ads ---------------------//
    Route::get('/ads/category/add',[AdCategoryController::class,'create'])->name('admin.create.adcategory');
    Route::post('/ads/category/add',[AdCategoryController::class,'store'])->name('admin.store.adcategory');

    Route::get('/ads/pending-ads',[AdsController::class,'pendingAds'])->name('pending.ads');
    Route::get('/ads/accept-ad/{id}',[AdsController::class,'acceptAd'])->name('admin.accept.ad');














    




});



//Routes for admin authentication
//These routes visible for all users and admins
Route::group(['prefix'=>'admin'],function(){
   Route::get('/login',[AuthenticationController::class,'adminLogin'])->name('admin.login');
   Route::post('/login',[AuthenticationController::class,'checkAdminLogin'])->name('check.admin.login');


});

//
//Route::get('payment', [PayPalController::class,'pa yment'])->name('payment');
//Route::get('cancel', [PayPalController::class,'cancel'])->name('payment.cancel');
//Route::get('payment/success', [PayPalController::class,'success'])->name('payment.success');