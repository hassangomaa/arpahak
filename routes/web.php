<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticationController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShareUSController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PayPalController;
use App\Http\Controllers\User\SocialApiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\ImageController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\CompetitionMessageController;
use Illuminate\Support\Facades\Route;


// Guests' Routes
Route::group(['name'=>'guests'],function (){
    Route::get('/', [Controller::class,'index'])->name('index');
    Route::get('/share_us', [ShareUSController::class,'index'])->name('share.us');
    Route::post('/share_us', [ShareUSController::class,'store'])->name('share.us.message');
    Route::get('/competition',[CompetitionController::class,'show'])->name('show.competitions');
    Route::get('/gallery',[ImageController::class,'index'])->name('gallery');
    //    Route::get('/trading',[TradingController::class,'index'])->name('trading');
    Route::get('/team',[LandingController::class,'team'])->name('team');
    Route::get('/privacy_policy',[LandingController::class,'privacyAndPolicy'])->name('privacy.policy');
});



//Authentication's Routes
Auth::routes(['verify' => true]);
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');


//Dashboard's Routes for users
Route::group(['middleware'=> ['verified','auth','disable_back']],function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/edit_password',[HomeController::class,'edit_password'])->name('edit.password');
    Route::post('/update_password',[HomeController::class,'update_password'])->name('update.password');
    Route::get('/balance',[HomeController::class,'balance'])->name('user.balance');
    Route::post('/competiton',[CompetitionMessageController::class,'store'])->name('message.guest.competitions');
    //Socials' Api Routes
    Route::get('/youtube/video/{id}',[SocialApiController::class,'youtube_video'])->name('youtube.video');
    Route::get('/facebook/{id}',[SocialApiController::class,'facebook'])->name('facebook');
    Route::get('/tiktok/{id}',[SocialApiController::class,'tiktok'])->name('tiktok');
    //----------------Metals And Trends-------------//
    Route::get('/my_deals',[UserServiceController::class,'index'])->name('user.deals');
    Route::get('/my_deals/buy/{id}',[UserServiceController::class,'BuyForm'])->name('user.buy');
    Route::post('/my_deals/buy/store',[UserServiceController::class,'BuyStore'])->name('user.buy.store');
    Route::get('/my_deals/sell/{id}',[UserServiceController::class,'SellForm'])->name('user.sell');
    Route::post('/my_deals/sell/store',[UserServiceController::class,'SellStore'])->name('user.sell.store');
 //    Route::get('/deals',[\App\Http\Controllers\MetalController::class,'show'])->name('show.metals');
 //    Route::get('/deals',[\App\Http\Controllers\MetalController::class,'show'])->name('show.metals');

    Route::get('/my_tasks',[HomeController::class,'myTasks'])->name('user.tasks');
    Route::get('/new/order',[UserServiceController::class,'create'])->name('add.order');
    Route::post('/new/order',[UserServiceController::class,'store'])->name('store.order');
    Route::get('/add_image',[ImageController::class,'create'])->name('add.image');
    Route::post('/add_image',[ImageController::class,'store'])->name('store.image');
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
    Route::get('/approved_image/{id}',[AdminController::class,'approvedImage'])->name('approved.image');
    Route::get('/accepted_images',[ImageController::class,'acceptedImages'])->name('accepted.images');
    Route::get('/delete_image/{id}',[ImageController::class,'destroy'])->name('image.destroy');


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
    //----------------------Metals TRENDS---------------------//
    Route::get('/add_metal',[\App\Http\Controllers\MetalMessageController::class,'create'])->name('add.services');
    Route::post('/add_metal/store',[\App\Http\Controllers\MetalMessageController::class,'store'])->name('add.services.store');
    Route::get('/all_metal_messages',[\App\Http\Controllers\MetalMessageController::class,'index'])->name('show.metal.messages');
    Route::post('/update_metal_message/{id}',[\App\Http\Controllers\MetalMessageController::class,'update'])->name('metal.message.update');
    Route::post('/destroy_metal_message/{id}',[\App\Http\Controllers\MetalMessageController::class,'destroy'])->name('metal.message.destroy');
    /////////////////////////-----------
    Route::get('/all_metal',[\App\Http\Controllers\ServiceController::class,'show'])->name('show.metals');
    Route::post('/update_service/{id}',[\App\Http\Controllers\ServiceController::class,'update'])->name('edit.service');
    Route::post('/destroy_service/{id}',[\App\Http\Controllers\ServiceController::class,'destroy'])->name('destroy.service');
//    Route::get('/delete_metal_message/{id}',[\App\Http\Controllers\MetalMessageController::class,'destroy'])->name('competition.message.destroy');




});



//Routes for admin authentication
//These routes visible for all users and admins
Route::group(['prefix'=>'admin'],function(){
   Route::get('/login',[AuthenticationController::class,'adminLogin'])->name('admin.login');
   Route::post('/login',[AuthenticationController::class,'checkAdminLogin'])->name('check.admin.login');

});


//Route::get('payment', [PayPalController::class,'payment'])->name('payment');
//Route::get('cancel', [PayPalController::class,'cancel'])->name('payment.cancel');
//Route::get('payment/success', [PayPalController::class,'success'])->name('payment.success');

