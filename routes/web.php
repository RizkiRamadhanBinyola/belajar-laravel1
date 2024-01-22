<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact;

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

Route::get('/', function () {
    return view('template.index');
});

// Route::get('/biodata', function () {
//     return view('bio.biodata');
// });

// Route::get('/contact', function () {
//     return view('contact', [
//         'title' => 'Contact Form',
//         'telp' => '08979912213'
//     ]);
    
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('template.index',[Contact::class, 'index']);