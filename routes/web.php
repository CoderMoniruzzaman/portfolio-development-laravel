<?php

//frontend routes
// Route::get('/', function (){
//   return view('welcome');
// });
Route::get('/', 'FrontendController@welcome');
Route::get('work', 'FrontendController@work');
Route::get('workview/{id}', 'FrontendController@workview');
Route::get('service', 'FrontendController@service');
Route::get('resume', 'FrontendController@resume');
Route::get('blog', 'FrontendController@blog');
Route::get('contact', 'FrontendController@contact');
Route::get('maintainance', 'FrontendController@notfound');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CONTACT
Route::get('editsite/contact/email', 'HomeController@contactemail');
Route::post('contact/insert', 'FrontendController@contactinsert');
Route::get('message/delete/{id}', 'HomeController@destroy');
Route::get('editsite/contact/emailview/{contact_id}', 'HomeController@readmessagestatus');
// Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );





//work Category route
Route::post('add/category/insert', 'CategoryController@categoryinsert');
Route::get('editsite/work/category', 'CategoryController@categoryview');
Route::get('change/category/{id}', 'CategoryController@changecategory');
Route::get('category/delete/{id}', 'CategoryController@destroy');
//work slider route
Route::get('editsite/work/slider', 'ProductController@sliderview');
Route::post('add/slider/insert', 'ProductController@sliderinsert');
Route::get('slider/delete/{id}','ProductController@sliderdestroy');
Route::get('editsite/work/editslider/{id}','ProductController@slideredit');
Route::post('edit/slider/insert', 'ProductController@editsliderinsert');

//product route
Route::get('editsite/work/product', 'ProductController@producthome');
Route::post('add/product', 'ProductController@productinsert');
Route::get('work/delete/{id}','ProductController@workdestroy');
Route::get('work/restore/{id}','ProductController@workrestore');
Route::get('forcedelete/work/{id}','ProductController@forcedelete');
Route::get('editsite/work/workedit/{id}','ProductController@editview');
Route::post('edit/product', 'ProductController@editproduct');
Route::post('/edit/product/single/{single_photo}/{single_id}','ProductController@editproductsingle');
Route::get('/delete/product/single/{single_photo}/{single_id}','ProductController@deleteproductsingle');


//HomePage route
Route::get('editsite/homepage/homepageview', 'HomePageController@homepageview');
Route::get('editsite/homepage/addhomecontent', 'HomePageController@addhomecontent');
Route::post('addhome/insert', 'HomePageController@addhomeinsert');
Route::get('change/homepage/{homepage_id}', 'HomePageController@changehomepage');
Route::get('editsite/homepage/singleviewhomepage/{id}','HomePageController@singleview');
Route::get('homepage/delete/{id}','HomePageController@destroy');
Route::get('homepage/restore/{id}','HomePageController@homepagerestore');
Route::get('forcedelete/homepage/{id}','HomePageController@forcedelete');
Route::get('editsite/homepage/edithomapage/{id}','HomePageController@editview');
Route::post('edit/homepage/insert', 'HomePageController@edit');
//Cv route
Route::get('cv/cv', 'CvController@cvview');
Route::post('addcv/insert', 'CvController@addcvinsert');
Route::get('change/cv/{file_id}', 'CvController@changecv');
Route::get('file/download/{id}', 'CvController@downloadcv');
Route::get('file/delete/{id}','CvController@destroy');
Route::get('file/restore/{id}','CvController@filerestore');
Route::get('forcedelete/file/{id}','CvController@forcedeletefile');
Route::get('cv/edit/{id}','CvController@fileedit');
Route::post('edit/cv/insert', 'CvController@editcvinsert');


//Resume
Route::get('editsite/resume/resumeview', 'ResumeController@resumeview');
