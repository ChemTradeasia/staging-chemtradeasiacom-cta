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

Route::get('/', function () {
    return view('home');
});

Route::get('/overview', function () {
    return view('overview');
});

Route::get('/vision-mission', function () {
    return view('vision-mission');
});

Route::get('/market-spread', function () {
    return view('market-spread');
});

Route::get('/our-location', function () {
    return view('our-location');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product/top', function () {
    return view('top-product');
});

Route::get('/product/application', function () {
    return view('application-product');
});

Route::get('/product/origin', function () {
    return view('origin-product');
});

// Route::get('/product/origin/indonesia', function () {
//     return view('origin-product');
// });

// Route::get('/product/NAOH', function () {
//     return view('detail-product');
// });

Route::get('/product/download-center', function () {
    return view('download-center');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/newsletters/categories', function () {
    return view('newsletter');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/industry', function () {
    return view('industry');
});

// Each Industry Page 
Route::get('/paint-ink-coating', function () {
    return view('industry.paint-ink-coating');
});
Route::get('/soap-detergent', function () {
    return view('industry.soap-detergent');
});
Route::get('/food-beverage', function () {
    return view('industry.food-beverage');
});
Route::get('/feed-additives', function () {
    return view('industry.feed-additives');
});
Route::get('/textile-leather', function () {
    return view('industry.textile-leather');
});
Route::get('/pulp-paper', function () {
    return view('industry.pulp-paper');
});
Route::get('/waste-water', function () {
    return view('industry.waste-water-treatment');
});
Route::get('/cosmetics', function () {
    return view('industry.cosmetics');
});
Route::get('/pharmaceutical', function () {
    return view('industry.pharmaceutical');
});
Route::get('/plastic-rubber', function () {
    return view('industry.plastic-rubber');
});
Route::get('/steel', function () {
    return view('industry.steel');
});
Route::get('/glass', function () {
    return view('industry.glass');
});
Route::get('/agriculture', function () {
    return view('industry.agriculture');
});
Route::get('/ceramic', function () {
    return view('industry.ceramic');
});
Route::get('/building-construction', function () {
    return view('industry.building-construction');
});

// For Change/Localization Language
Route::get('lang/{language}', 'LocalizationController@index')->name('localization.switch');
