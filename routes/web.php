<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductFilterController;
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
    return view('welcome');
});
Route::get('/sample', function () {
    return view('sample');
});
Route::get('/samplebody', function () {
    return view('samplebody');
});
Route::get('/samplebody1', function () {
    return view('samplebody1');
});


Route::get('blog', function () {
    return view('blog');
});

Route::get('10_points', function () {
    return view('blogpoints');
});
Route::get('influencer', function () {
    return view('influencer');
});
Route::get('Viva_Magenta', function () {
    return view('Viva_Magenta');
});
Route::get('blogpage4', function () {
    return view('blogpage4');
});
Route::get('contact_us', function () {
    return view('contact_us');
});

Route::get('sizeguide', function () {
    return view('ringsizeguide');
});

Route::get('chatbot', function () {
    return view('chatbot');
});
Route::get('careers', function () {
    return view('careers');
});
Route::get('demo', function () {
    return view('demo');
});
Route::get('card', function () {
    return view('card');
});

Route::get('education', function () {
    return view('education');
});
Route::get('fun_fact ', function () {
    return view('fun_fact');
});
Route::get('right_diamond_necklace ', function () {
    return view('right_diamond_necklace');
});
Route::get('right_diamond_pendant', function () {
    return view('right_diamond_pendant');
});

Route::get('right_bangle_bracelet', function () {
    return view('right_bangle_bracelet');
});

Route::get('faq', function () {
    return view('faq');
});
Route::get('subscribe', function () {
    return view('subscribe');
});
Route::get('signup', function () {
    return view('signup');
});

Route::get('refer-a-friend', function () {
    return view('refer_a_friend');
});
Route::get('track-my-order', function () {
    return view('track-my-order');
});
Route::get('track-my-order2', function () {
    return view('track-my-order2');
});

Route::get('track-my-order3', function () {
    return view('track-my-order3');
});
Route::get('jewellery-for-men', function () {
    return view('jewellery-for-men');
});
Route::get('platinum-jewelry', function () {
    return view('platinum-jewelry');
});
Route::get('press', function () {
    return view('press');
});
Route::get('press1', function () {
    return view('press1');
});
Route::get('rotateonhover', function () {
    return view('press2');
});
Route::get('press3', function () {
    return view('press3');
});
Route::get('press4', function () {
    return view('press4');
});
Route::get('press5', function () {
    return view('press5');
});
Route::get('shipping&return', function () {
    return view('shipping&return');
});

Route::get('gemstone-jewelry', function () {
    return view('gemstone-jewelry');
});
Route::get('best-diamond-earrings', function () {
    return view('best-diamond-earrings');
});
Route::get('buying-diamond-rings', function () {
    return view('buying-diamond-rings');
});
Route::get('order-tracking-form', function () {
    return view('order-tracking-form');
});
Route::get('unsubscribe', function () {
    return view('unsubscribe');
});
Route::get('scroll-top-blogpage', function () {
    return view('scroll-top-blogpage');
});
Route::get('stare', function () {
    return view('stare');
});
Route::get('invoice', function () {
    return view('invoice');
});
Route::get('order-delivered', function () {
    return view('order-delivered');
});
Route::get('order-confirmation', function () {
    return view('order-confirmation');
});
Route::get('order-cancel', function () {
    return view('order-cancel');
});
Route::get('order-shipped', function () {
    return view('order-shipped');
});
Route::get('header', function () {
    return view('header');
});
Route::get('popup', function () {
    return view('popup');
});
Route::get('share', function () {
    return view('share');
});
Route::get('newshare', function () {
    return view('newshare');
});

Route::get('acordian', function () {
    return view('acordian');
});
Route::get('password-show', function () {
    return view('password-show');
});
Route::get('acordian', function () {
    return view('acordian');
});
Route::get('acordian2', function () {
    return view('acordian2');
});
Route::get('acordian3', function () {
    return view('acordian3');
});
Route::get('acordian4', function () {
    return view('acordian4');
});
Route::get('likedislike', function () {
    return view('likedislike');
});
Route::get('cookies', function () {
    return view('cookies');
});
Route::get('navigationmenu', function () {
    return view('navigationmenu');
});
Route::get('multinav', function () {
    return view('multinav');
});
Route::get('animatednav', function () {
    return view('animatednav');
});
Route::get('exzoom', function () {
    return view('exzoom');
});
Route::get('exzoom2', function () {
    return view('exzoom2');
});
Route::get('loading', function () {
    return view('loading');
});
Route::get('check', function () {
    return view('check');
});
Route::get('copyinput', function () {
    return view('copyinput');
});
Route::get('menuicon', function () {
    return view('menuicon');
});
Route::get('animatedsearch', function () {
    return view('animatedsearch');
});
Route::get('alert-message', function () {
    return view('alert-message');
});
Route::get('Scroll-Indicator', function () {
    return view('Scroll-Indicator');
});
Route::get('Fullscreen_Search', function () {
    return view('Fullscreen_Search');
});
Route::get('Zebra_Striped_Table', function () {
    return view('Zebra_Striped_Table');
});
Route::get('Compare_Two_Images', function () {
    return view('Compare_Two_Images');
});
Route::get('Timeline', function () {
    return view('Timeline');
});
Route::get('animateheader', function () {
    return view('animateheader');
});
Route::get('scratchcard', function () {
    return view('scratchcard');
});
Route::get('nextpreview', function () {
    return view('nextpreview');
});
Route::get('testimonial', function () {
    return view('testimonial');
});
Route::get('tcolorimage', function () {
    return view('transparentcolorimage');
});
Route::get('animation', function () {
    return view('animation');
});
Route::get('new', function () {
    return view('new');
});

Route::get('pricerangefilter2', function () {
    return view('pricerangefilter2');
});

Route::get('/textimonial', function () {
    return view('textimonial');
});
Route::get('/desablesubmit', function () {
    return view('desablesubmit');
});
Route::get('/bgcolor', function () {
    return view('bgcolorchangescroll');
});
Route::get('/imagecomparigen', function () {
    return view('imagecomparigen');
});

//Range filter of price
Route::get('/', [ProductFilterController::class, 'all_products'])->name('all.products');
//use
Route::get('/search-product', [ProductFilterController::class, 'search_products'])->name('search.products');
//use
Route::get('/sort-by', [ProductFilterController::class, 'sort_by'])->name('sort.by');
// Like Or Dislike

Route::get('save-likedislike', [PostController::class, 'save_likedislike']);
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
