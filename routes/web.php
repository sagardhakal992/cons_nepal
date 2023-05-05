<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name("home");
Route::get('about-us', function () {
    return view('about');
})->name("about");

Route::get('agents', function () {
    return view('agents');
})->name("agents");


Route::get('contactus', function () {
    return view('contact');
})->name("contact");


Route::get("agents/{id}", function () {
    return view('agents-detail');
})->name('agents-detail');

Route::view("blog", "blog")->name("blog");
Route::view("blog/{id}", "blog-detail")->name("blog-detail");
Route::view("countries", "country")->name('country');
Route::group(["prefix" => "services"], function () {
    Route::view("/","services.index")->name('services.index');
    Route::view("student-screening","services.student-screening")->name('services.student-screening');
    Route::view("university-application-assistance","services.university-application-assistance")->name('services.university-application-assistance');
    Route::view("documentation-guidance","services.documentation-guidance")->name('services.documentation-guidance');
    Route::view("office-letter-confirmation","services.office-letter-confirmation")->name('services.office-letter-confirmation');
    Route::view("counseling","services.counseling")->name('services.counseling');
});
Route::view("faq/questions", "faq")->name("faq");
Route::view("country/canada", "canada")->name('canada');
Route::view('visa-launch-process', "visa-launch-process")->name("visa-launch-process");
Route::view("country/canda/intake", "intake")->name("intake");
Route::view('geo-lifestyle', "geo-lifestyle")->name('geo-lifestyle');
Route::fallback(function () {
    return view('404');
 });
