<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\Frontend\Homepage;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VoterCMController;
use App\Http\Controllers\VoterCSController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\MultiContestController;
use App\Http\Controllers\PaymentControllerMulti;
use App\Http\Controllers\RequestPayoutController;
use App\Http\Controllers\ContestantmultiController;
use App\Http\Controllers\MultiContestCategoryController;
use App\Http\Controllers\CorporateMultiContestController;
use App\Http\Controllers\CorporateSingleContestController;
use App\Http\Controllers\CorporateContestantmultiController;
use App\Http\Controllers\CorporateContestCategoryController;
use App\Http\Controllers\CorporateSingleContestantController;





Route::group(['middleware' => 'prevent-back-history'],function(){




//single route request


Route::get('/testnew', function(){
    return view ('auth.verify-email');
});

Route::get('/',[Homepage::class, 'index'] )->name('homepage.show');
Route::get('/homepage',[Homepage::class, 'indexnew'] )->name('homepage.shownew');
Route::get('/new',[Homepage::class, 'new'] );
Route::get('/about',[Homepage::class, 'about'] )->name('about.show');
Route::get('/contact',[Homepage::class, 'contact'] )->name('contact.show');
Route::get('/search',[Homepage::class, 'searchcontest'] )->name('contest.loadsearch');
Route::get('/contests/all',[Homepage::class, 'contestarchive'] )->name('contest.archive');

Route::get('/contests/{slug}',[Homepage::class, 'ContestView'] )->name('contest.user.view');
Route::get('/contestant/{slug}',[Homepage::class, 'ContestantUserVote'] )->name('contestant.user.vote');
Route::post('/contestant/search/',[Homepage::class, 'ContestantUserSearch'] )->name('contestant.user.search');


//////multi contest routes
Route::get('/multicontests/{slug}',[Homepage::class, 'MultiContestView'] )->name('multicontest.user.view');

Route::get('/multicontestant/{slug}',[Homepage::class, 'MultiContestantUserVote'] )->name('multicontestant.user.vote');




//corporate single contest routes 

Route::get('/corporate/contests/{slug}',[Homepage::class, 'CorporateSingleContestUserView'] )->name('corporatesinglecontest.user.view');
Route::get('/corporate/contestant/{slug}',[Homepage::class, 'CorporateSingleContestContestantUserVote'] )->name('corporatesinglecontestcontestant.user.vote');
Route::post('/corporate/contestant/search/',[Homepage::class, 'CorporateSingleContestantUserSearch'] )->name('corporatesinglecontestant.user.search');
Route::post('/corporate/contestant/vote/',[Homepage::class, 'CorporateSingleContestantAddVote'] )->name('corporatesinglecontestant.user.addvote');



//corporate multi contest routes 

Route::get('/corporate/multi/contests/{slug}',[Homepage::class, 'CorporateMultiContestUserView'] )->name('corporatemulticontest.user.view');

Route::get('/corporate/multi/contestant/{slug}',[Homepage::class, 'CorporateMultiContestContestantUserVote'] )->name('corporatemulticontestcontestant.user.vote');

Route::post('/corporate/multi/contestant/vote/',[Homepage::class, 'CorporateMultiContestantAddVote'] )->name('corporatemulticontestant.user.addvote');








//end single route requests with no middleware


Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('dashboard');


require __DIR__.'/auth.php';




Route::controller(Homepage::class)->middleware(['auth', 'verified'])->group(function () {
    // Route::get('/', 'index')->name('homepage.show');
    Route::get('/edit/homepageslider', 'EditSlide')->name('homepageslider.edit');
    Route::post('/update/homepageslider', 'UpdateSlide')->name('update.slider');
  
   
});





Route::controller(LogoController::class)->middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/brands', 'index')->name('brands.show');
    Route::get('/brands/create', 'create')->name('brands.create');
    Route::post('/brands/store', 'store')->name('brands.store');
    Route::get('/brands/edit/{id}', 'edit')->name('brands.edit');
    Route::post('/brands/update', 'update')->name('brands.update');
    Route::get('/brands/delete/{id}', 'destroy')->name('brands.delete');
});


//vendor routes allows for signup

Route::controller(VendorController::class)->middleware(['auth', 'verified'])->group(function () {

    Route::get('/vendor/signup', 'SignUp')->name('vendor.signup');
    Route::post('/vendor/store', 'VendorStore')->name('vendor.store');
    Route::get('/contest/category', 'create')->name('contest.create');
    Route::get('/logout', 'destroy')->name('admin.logout');
    Route::get('/profile', 'Profile')->name('admin.profile');
    Route::get('/profile/edit', 'ProfileEdit')->name('admin.profile.edit');
    Route::post('/profile/store', 'ProfileStore')->name('admin.profile.store');
    Route::get('/profile/changepassword', 'ProfileChangePassword')->name('change.password');
    Route::post('/profile/update', 'PasswordUpdate')->name('newpassword.update');
      
     
    });
    


//vendor routes allows for updates and contest creation


Route::controller(VendorController::class)->middleware(['auth', 'verified', 'vendor'])->group(function () {

 Route::get('/vendor/profile/{id}', 'VendorShow')->name('vendorprofile.show');
    Route::get('/vendor/profile/edit/{id}', 'VendorEdit')->name('vendor.edit');
    Route::post('/vendor/profile/update/{id}/', 'VendorUpdate')->name('vendor.update');
 
});





// single category paid vote  contest main routes


Route::controller(ContestController::class)->prefix('vendor/singlecategory/contests')->middleware(['auth', 'verified', 'vendor'])->group(function () {


    Route::get('/select/contest/type', 'select')->name('contest.select');
    Route::get('/all', 'index')->name('contest.all');
    Route::get('/add', 'create')->name('monocontest.add');
    Route::get('/{slug}', 'show')->name('contest.show');
    Route::get('/{id}/edit', 'edit')->name('contest.edit');
    Route::post('/update/{id}', 'update')->name('contest.update');
    Route::post('/store', 'store')->name('contest.store');
    Route::get('/delete/{id}', 'destroy')->name('contest.delete');





   
 
});


// single category paid vote  contestant routes

Route::controller(ContestantController::class)->prefix('vendor/contestant')->middleware(['auth', 'verified', 'vendor'])->group(function () {

    Route::get('/add', 'create')->name('contestant.add');
    Route::post('/store', 'store')->name('contestant.store');
    Route::get('/delete/{id}', 'delete')->name('contestant.delete');
    Route::get('/view/{id}', 'show')->name('contestant.vendor.show');
    Route::get('/edit/{id}', 'edit')->name('contestant.edit');
    Route::post('/update/{id}', 'update')->name('contestant.update');
   
 
});




// multi category paid vote  main contest routes


Route::controller(MultiContestController::class)->prefix('vendor/multicontest')->middleware(['auth', 'verified', 'vendor'])->group(function () {



  

   
    Route::get('/add', 'create')->name('multicontest.create');
    Route::post('/store', 'store')->name('multicontest.store');

    Route::get('/all', 'index')->name('multicontest.all');
    Route::get('/{slug}', 'show')->name('multicontest.show');
    Route::get('/{id}/edit', 'edit')->name('multicontest.edit');
    Route::post('/update/{id}', 'update')->name('multicontest.update');
// Route::get('/delete/{id}', 'destroy')->name('multicontest.delete');



 
});



// multi category paid vote category routes


Route::controller(MultiContestCategoryController::class)->prefix('vendor/multicontest/category')->middleware(['auth', 'verified', 'vendor'])->group(function () {


 Route::get('/all', 'index')->name('multicontestcategoryadd.all');
  Route::get('/add', 'create')->name('multicontestcategory.create');
  Route::post('/store', 'store')->name('multicontestcategory.store');
  Route::get('/delete/{id}', 'destroy')->name('multicontestcategory.delete');
  Route::get('/{id}/edit', 'edit')->name('multicontestcategory.edit');
  Route::post('/update/{id}', 'update')->name('multicontestcategory.update');
  
  



 
});





//multi category paid vote  contestant routes

Route::controller(ContestantmultiController::class)->prefix('vendor/multi/contestant')->middleware(['auth', 'verified', 'vendor'])->group(function () {

    Route::get('/add', 'create')->name('multicontestant.add');
    Route::post('/store', 'store')->name('multicontestant.store');
     Route::get('/delete/{id}', 'destroy')->name('multicontestant.delete');
    Route::get('/view/{id}', 'show')->name('multicontestant.show');
    Route::get('/edit/{id}', 'edit')->name('multicontestant.edit');
    Route::post('/update/{id}', 'update')->name('multicontestant.update');


   
 
});






// Laravel 8 & 9 paystack payment routes

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');

Route::get('/payment/details', [PaymentController::class, 'paymentprocess'])->name('payment.process');




Route::post('/paymulti', [PaymentControllerMulti::class, 'redirectToGateway'])->name('pay.multi');

Route::get('/payment/details/multi', [PaymentControllerMulti::class, 'paymentprocess'])->name('payment.process.multi');












//corporate single main contest routes


Route::controller(CorporateSingleContestController::class)->prefix('vendor/singlecategory/corporate/contests')->middleware(['auth', 'verified', 'vendor'])->group(function () {


    Route::get('/select/contest/type', 'select')->name('corporatesinglecontest.select');
    Route::get('/add', 'create')->name('corporatesinglecontest.add');
    Route::post('/store', 'store')->name('corporatesinglecontest.store');
    Route::get('/all', 'index')->name('corporatesinglecontest.all');
    Route::get('/{slug}', 'show')->name('corporatesinglecontest.show');
    Route::get('/{id}/edit', 'edit')->name('corporatesinglecontest.edit');
    Route::post('/update/{id}', 'update')->name('corporatesinglecontest.update');

    // Route::get('/delete/{id}', 'destroy')->name('corporatesinglecontest.delete');


   


   
 
});



//corporate single contestant routes


Route::controller(CorporateSingleContestantController::class)->prefix('vendor/singlecategory/corporate/contestant')->middleware(['auth', 'verified', 'vendor'])->group(function () {

    Route::get('/add', 'create')->name('corporatesinglecontestant.add');
     Route::post('/store', 'store')->name('corporatesinglecontestant.store');
    Route::get('/view/{id}', 'show')->name('corporatesinglecontestant.vendor.show');
    Route::get('/new/edit/{id}', 'edit')->name('corporatesinglecontestant.edit');
    Route::post('/update/{id}', 'update')->name('corporatesinglecontestant.update');
    Route::get('/delete/{id}', 'destroy')->name('corporatesinglecontestant.delete');
   
 
});


//corporate single voters routes




Route::controller(VoterCSController::class)->prefix('vendor/singlecategory/corporate/voter')->middleware(['auth', 'verified', 'vendor'])->group(function () {
    Route::get('/all', 'index')->name('corporatesinglevoter.all');
    Route::get('/add', 'create')->name('corporatesinglevoter.add');
    Route::post('/store', 'store')->name('corporatesinglevoter.store');
    Route::get('/search', 'search')->name('csvoters.loadsearch');
    // Route::get('/view/{id}', 'show')->name('corporatesinglecontestant.vendor.show');
    Route::get('/edit/{id}', 'edit')->name('corporatesinglevoter.edit');
    Route::post('/update/{id}', 'update')->name('corporatesinglevoter.update');
    Route::get('/delete/{id}', 'destroy')->name('corporatesinglevoter.delete');
    Route::get('/activate', 'activate')->name('corporatesinglevoter.activate');
   
 
});









// multi category corportate vote  main contest routes


Route::controller(CorporateMultiContestController::class)->prefix('vendor/multicategory/corporate/contests')->middleware(['auth', 'verified', 'vendor'])->group(function () {



  

   
    Route::get('/add', 'create')->name('corporatemulticontest.create');
    Route::post('/store', 'store')->name('corporatemulticontest.store');
    Route::get('/all', 'index')->name('corporatemulticontest.all');
    Route::get('/{slug}', 'show')->name('corporatemulticontest.show');
    Route::get('/{id}/edit', 'edit')->name('corporatemulticontest.edit');
    Route::post('/update/{id}', 'update')->name('corporatemulticontest.update');
// // Route::get('/delete/{id}', 'destroy')->name('corporatemulticontest.delete');



 
});







//corporate multi category free vote category routes


Route::controller(CorporateContestCategoryController::class)->prefix('vendor/corporate/multicontest/category')->middleware(['auth', 'verified', 'vendor'])->group(function () {


    Route::get('/all', 'index')->name('corporatemulticontestcategoryadd.all');
     Route::get('/add', 'create')->name('corporatemulticontestcategory.create');
     Route::post('/store', 'store')->name('corporatemulticontestcategory.store');
     Route::get('/delete/{id}', 'destroy')->name('corporatemulticontestcategory.delete');
     Route::get('/{id}/edit', 'edit')->name('corporatemulticontestcategory.edit');
     Route::post('/update/{id}', 'update')->name('corporatemulticontestcategory.update');
     
     
   
   
   
    
   });
   








//multi category free vote  contestant routes

Route::controller(CorporateContestantmultiController::class)->prefix('vendor/corporate/multicontest/contestant')->middleware(['auth', 'verified', 'vendor'])->group(function () {

    Route::get('/add', 'create')->name('corporatemulticontestant.add');
    Route::post('/store', 'store')->name('corporatemulticontestant.store');
     Route::get('/delete/{id}', 'destroy')->name('corporatemulticontestant.delete');
    Route::get('/view/{id}', 'show')->name('corporatemulticontestant.show');
    Route::get('/edit/{id}', 'edit')->name('corporatemulticontestant.edit');
    Route::post('/update/{id}', 'update')->name('corporatemulticontestant.update');


   
 
});






//corporate single voters routes




Route::controller(VoterCMController::class)->prefix('vendor/multicategory/corporate/voter')->middleware(['auth', 'verified', 'vendor'])->group(function () {
    Route::get('/all', 'index')->name('corporatemultivoter.all');
    Route::get('/add', 'create')->name('corporatemultivoter.add');
    Route::post('/store', 'store')->name('corporatemultivoter.store');
    Route::get('/search', 'search')->name('cmvoters.loadsearch');
    // Route::get('/view/{id}', 'show')->name('corporatesinglecontestant.vendor.show');
    Route::get('/edit/{id}', 'edit')->name('corporatemultivoter.edit');
    Route::post('/update/{id}', 'update')->name('corporatemultivoter.update');
    Route::get('/delete/{id}', 'destroy')->name('corporatemultivoter.delete');
    Route::get('/activate', 'activate')->name('corporatemultivoter.activate');
   
 
});




//request payout




Route::controller(RequestPayoutController::class)->prefix('vendor/payout/request')->middleware(['auth', 'verified', 'vendor'])->group(function () {
    Route::get('/all', 'index')->name('payout.all');
    Route::get('/add', 'create')->name('payout.add');
    Route::post('/store', 'store')->name('payout.store');
    Route::post('/search', 'store')->name('payout.search');
    Route::post('/process', 'process')->name('payout.process');
    Route::post('/store/request', 'storeRequest')->name('payout.storerequest');
    Route::get('/view/{id}', 'show')->name('payout.show');
    Route::get('/ajax/{category_id}', 'getContest');

      
 
});



Route::controller(ResultController::class)->prefix('vendor/contest/result')->middleware(['auth', 'verified', 'vendor'])->group(function () {
  
    Route::get('/add', 'create')->name('result.add');
     Route::post('/search', 'store')->name('result.search');
     Route::get('/ajax/{category_id}', 'getContest');
         
 
});





///admin routes


Route::controller(AdminController::class)->prefix('/admin')->middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/dashboard', 'index')->name('admin.dashboard');
   
    Route::get('/users', 'UserView')->name('admin.users');
    Route::get('/users/create/', 'UserCreate')->name('admin.users.create');
    Route::get('/users/view/{id}', 'UserViewSingle')->name('admin.users.view');
    Route::get('/users/delete/{id}', 'UserDelete')->name('admin.users.delete');
    Route::get('/users/edit/{id}', 'UserEdit')->name('admin.users.edit');
    Route::post('/users/update/{id}', 'UserUpdate')->name('admin.users.update');
    Route::post('/users/store', 'UserStore')->name('admin.users.store');
    Route::get('/contests', 'ContestsView')->name('admin.contest');
   
    Route::get('/contests/ajax/{category_id}', 'getContest');

    Route::post('/contest/process', ' processContest')->name('admin.contest.process');
    Route::post('/contest/search', 'contestSearch')->name('admin.contest.search');



});











});