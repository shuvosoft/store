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
    $contactInfo= \App\ContactInfo::all();
    $authors = \App\Author::latest()->take(5)->get();
    $submenus = \App\Submenu::all();
    $menus = \App\Menu::all();
    $newBook = \App\new_book_header::all();
    $books = \App\Book::latest()->take(8)->get();
    $pbooks = \App\Book::all()->take(12);
    $categories = \App\Category::latest()->get();
    $sliders = \App\Slider::latest()->get();
    $bookfooter = \App\BookFooter::all();
    return view('welcome',compact('sliders','categories','books','pbooks','newBook','bookfooter','menus','submenus','authors','contactInfo'));
});

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/contact','ContactController@index')->name('contact.send');
Route::post('/message','ContactController@sendMessage')->name('contact.message');

Auth::routes();

//Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::get('books', 'BooksController@index')->name('books.index');
Route::get('book/{slug}', 'BooksController@details')->name('book.details');
Route:: get('category/{slug}', 'BooksController@bookByCategory')->name('category.book');

Route::get('/search','BooksController@search')->name('search');

Route::group(['prefix' => 'admin','middleware'=>'auth', 'namespace'=>'Admin'], function(){

    Route::get('/', 'AdminPagesController@index')->name('dashboard');

//    settings route

    Route::get('settings','SettingController@index')->name('settings');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');
});

// category route

Route::group(['prefix'=>'admin', 'middleware'=>'auth','namespace'=>'Admin'], function (){


    Route::resource('category', 'CategoryController');
    Route::resource('menu', 'MenuController');
    Route::resource('submenu', 'SubmenuController');



});

// Author route

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'Admin'], function (){


    Route::resource('author', 'AuthorController');

});

// Book route

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'Admin'], function (){


    Route::resource('book', 'BookController');

});

// New Book Header route

Route::group(['prefix'=>'admin', 'middleware'=>'auth','namespace'=>'Admin'], function (){


    Route::resource('New_book_add', 'NewProductHeaderController');

});

// New Book footer route

Route::group(['prefix'=>'admin', 'middleware'=>'auth','namespace'=>'Admin'], function (){


    Route::resource('New_book_footer', 'BookFooterController');

});

// Slider route

Route::group(['prefix'=>'admin','middleware'=>'auth', 'namespace'=>'Admin'], function (){


    Route::resource('slider', 'SliderController');

});

// Order route

Route::group(['prefix'=>'admin','middleware'=>'auth', 'namespace'=>'Admin'], function (){


    Route::resource('order', 'OrderController');

});

Route::group(['prefix'=>'admin','middleware'=>'auth', 'namespace'=>'Admin'], function (){


    Route::resource('contact', 'ContactController');

});
// contact info route

Route::group(['prefix'=>'admin','middleware'=>'auth', 'namespace'=>'Admin'], function (){


    Route::resource('contactinfo', 'ContactInfoController');

});
