<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB as DBS;
use Illuminate\Support\Facades\Mail;




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
// array:15 [▼
//   "_token" => "pWpNGUdvV1OGm4lkh6Lf1fxch6HmiDQoQqgCEqzB"
//   "a1" => "a"
//   "a2" => "a"
//   "a3" => "a@gmail.com"
//   "a4" => "a"
//   "a5" => "a"
//   "a6" => "a"
//   "a7" => "a"
//   "a8" => "a"
//   "a9" => "a"
//   "a10" => "a"
//   "a11" => "a"
//   "a12" => "a"
//   "a13" => "a"
//   "a14" => "a"
// ]


Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});



Route::get('/', function () {
    return view('welcome');
});

Route::post('/Request', function (Request $request) {

    $form=array();
    $form['a1']= $request->input('a1');
    $form['a2']= $request->input('a2');
    $form['a3']= $request->input('a3');
    $form['a4']= $request->input('a4');
    $form['a5']= $request->input('a5');
    $form['a6']= $request->input('a6');
    $form['a7']= $request->input('a7');
    $form['a8']= $request->input('a8');
    $form['a9']= $request->input('a9');
    $form['a10']= $request->input('a10');
    $form['a11']= $request->input('a11');
    $form['a12']= $request->input('a12');
    $form['a13']= $request->input('a13');
    $form['a14']= $request->input('a14');


    $forms = DB::table('form')->insertGetId(
       $form
    );



    

 




                // Mail::send('/maile', ['form' => $form], function($m) use ($form){
				// 	$m->to("mr.bean.mg22@gmail.com")->subject('form@form.engwalaa.com')->getSwiftMessage()
				// 	->getHeaders()
				// 	->addTextHeader('x-mailgun-native-send', 'true');
                //     $m->from('form@form.engwalaa.com','Tamkeen');
				// });




				





    return redirect()->route('req', [$forms]);


})->name('Request');

Route::get('/resulting/{id}', function ($id) {
    $form= DB::table('form')->find($id);


  
    return view('req',compact('form'));
})->name('req');
