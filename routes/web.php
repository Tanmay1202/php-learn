<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClientController;


//basic routing
// Route::get('/', function(){
//     return "Welcome";
// });


//routing to view
Route::get('/tanmay', function(){
    return view('tanmay');
});


//routing to view shorthand
Route::view('/about', 'about');

//required parameter routing
// Route::get('user/{id}', function($id){
//     return "$id";
// });

// //multiple parameters
// Route::get('user/{id}/{name}', function($id, $name){
//     return $id." ".$name;
// });


//optional parameters
Route::get('option/{name?}', function($guest = "tanmay"){
    return $guest;
});

//number-only contraint
Route::get('number/{id}', function($id){
    return $id;
})
->whereNumber('id');

//alphabet-only contraint
Route::get('alphabet/{name}', function($name){
    return $name;
})->whereAlpha('name');

//alpha-numeric
Route::get('alphanum/{id}', function($id){
    return $id;
})->whereAlphaNumeric("id");

//where-in
Route::get('wherein/{role}', function($role){
    return $role;
})->whereIn('role', [
    'admin', 'tanmay'
]);

//return views
Route::get('user-blade', function(){
    return view('user');
});

//nested view
Route::get('inside-nested', function(){
    return view('nested.inside-nested');
});

//passing data to views

//through an array
Route::get('array-data', function(){
    return view('passing-data.passing-data-array', 
    [
        'name' => 'tanmay',
        'age' => 20,
        'love' => 'amrutha'
    ]);
});

//using with()

Route::get('with-data', function(){
    return view('passing-data.passing-data-with')
    ->with('name', 'tanmay')
    ->with('age', '22')
    ->with('love', 'amubangaram');
});

//using compact

Route::get('compact-data', function(){
    $name = "Tanmay";
    $age = 20;

    $details = [
        'love' => 'kanniamrutha',
        'loveage' => 'from 2 to 22'
    ];
    return view('passing-data.passing-data-compact',compact('name', 'age', 'details'));
});

//loop in blade

Route::get('/loops', function(){
    $students = [
        "tanmay",
        "amrutha",
        "shivansh",
        "rishu"
    ];

    return view('blade-control-flow.loops', compact('students'));
});

//condition in blade

Route::get('conditional/{id}', function($id){
    return view('blade-control-flow.conditional')->with('id', 'value');
});

//return responses

//string response
Route::get('string-response', function(){
    return 'this is a string-response';
});

//array response
Route::get('array-response', function(){
    return [1, 2, 3, 4];
});

//response object
Route::get('object-response', function(){
    return response('Hello', 200);
});

//attaching headers
Route::get('header-response', function(){
    return response('i have attached a header')
    ->header('Content-Type', 'text/plain');
});

//attaching cookies
Route::get('attach-cookies', function(){
    return response('i have attached some cookies')
    ->cookie('username', 'tanmay', 60);
});

//json response
Route::get('json-response', function(){
    return response()->json([
        'name' => 'Tanmay',
        'age' => 22
    ]);
});

//view response
Route::get('view-response', function(){
    return response()->view('tanmay');
});

//redirection

Route::get('redirect', function(){
    return redirect('tanmay');
});

//Controllers

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/{id}', [StudentController::class, 'show']);

//passing data from controller to view
Route::get('/students-data', [StudentController::class, 'passedData']);

//middleware

Route::get('checkage', function(){
    return "so you're legal";
})->middleware('age.check');


Route::get('admin-page', function(){
    return "hello admin";
})->middleware('role.check');

//Route::get('client-page', [ClientController::class, 'show']);

//controller middleware
//Route::get('client-page', [ClientController::class, 'show']);

Route::get('checkCountry/{count}', [CountryController::class, 'country']);

//advanced routing

//named routing

Route::view('/home', 'home')->name('home');
Route::view('/about', 'about')->name('about');