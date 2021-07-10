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

// Route::get('/', function () {
//     return view('frontend.welcome');
// });
Route::group(['prefix' => '/',  'middleware' => 'guest'], function(){

    Route::get('','Frontend\HomePageController@home')->name('welcome.index');
    Route::get('about','Frontend\HomePageController@about')->name('welcome.about');
    Route::get('contact','Frontend\HomePageController@contact')->name('welcome.contact');
    Route::get('remmitance_overview','Frontend\HomePageController@overview')->name('welcome.overview');
    Route::get('gallery','Frontend\HomePageController@gallery')->name('welcome.gallery');
    Route::get('central_bank_message','Frontend\HomePageController@central_bank_message')->name('welcome.central_bank_message');
    Route::get('acts_and_regulations','Frontend\HomePageController@acts_and_regulations')->name('welcome.acts_and_regulations');
    Route::get('news_and_update','Frontend\HomePageController@news_and_update')->name('welcome.news_and_update');
    Route::get('committee','Frontend\HomePageController@committee')->name('welcome.committee');
    Route::get('member','Frontend\HomePageController@member')->name('welcome.member');

    Route::get('admin','Admin\LoginController@login')->name('login');
    Route::post('admin_login','Admin\LoginController@post_login')->name('post_login');
});




Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('dashboard','Admin\LoginController@dashboard')->name('dashboard');

    //Exchange Rates Route
    Route::get('exchange_rates','Admin\ExchangeRateController@get_exchange_rates')->name('get_exchange_rates');
    Route::get('add_exchange_rates','Admin\ExchangeRateController@add_exchange_rates')->name('add_exchange_rates');
    Route::post('post_exchange_rates','Admin\ExchangeRateController@post_exchange_rates')->name('post_exchange_rates');
    Route::post('search_by_date','Admin\ExchangeRateController@search_by_date')->name('search_by_date');
    Route::get('exchange_rate','Admin\ExchangeRateController@edit_exchange_rate')->name('edit_exchange_rate');
    Route::post('update_exchange_rate','Admin\ExchangeRateController@update_exchange_rate')->name('update_exchange_rate');
    Route::get('delete_exchange_rate','Admin\ExchangeRateController@delete_exchange_rate')->name('delete_exchange_rate');

    //Executive Committee Route
    Route::get('executive_committees','Admin\ExecutiveCommitteeController@get_executive_committees')->name('get_executive_committees');
    Route::get('add_executive_committee','Admin\ExecutiveCommitteeController@add_executive_committee')->name('add_executive_committee');
    Route::post('post_executive_committee','Admin\ExecutiveCommitteeController@post_executive_committee')->name('post_executive_committee');
    Route::get('executive_committee','Admin\ExecutiveCommitteeController@edit_executive_committee')->name('edit_executive_committee');
    Route::post('update_executive_committee','Admin\ExecutiveCommitteeController@update_executive_committee')->name('update_executive_committee');
    Route::get('delete_executive_committee','Admin\ExecutiveCommitteeController@delete_executive_committee')->name('delete_executive_committee');

    //Acts and regulations Route
    Route::get('acts_and_regulations','Admin\ActsRegulationController@get_acts_and_regulations')->name('get_acts_and_regulations');
    Route::get('add_acts_and_regulation','Admin\ActsRegulationController@add_acts_and_regulation')->name('add_acts_and_regulation');
    Route::post('post_acts_and_regulation','Admin\ActsRegulationController@post_acts_and_regulation')->name('post_acts_and_regulation');
    Route::get('acts_and_regulation','Admin\ActsRegulationController@edit_acts_and_regulation')->name('edit_acts_and_regulation');
    Route::post('update_acts_and_regulation','Admin\ActsRegulationController@update_acts_and_regulation')->name('update_acts_and_regulation');
    Route::get('delete_acts_and_regulation','Admin\ActsRegulationController@delete_acts_and_regulation')->name('delete_acts_and_regulation');

        //Acts and regulations Route
    Route::get('acts_and_regulations','Admin\ActsRegulationController@get_acts_and_regulations')->name('get_acts_and_regulations');
    Route::get('add_acts_and_regulation','Admin\ActsRegulationController@add_acts_and_regulation')->name('add_acts_and_regulation');
    Route::post('post_acts_and_regulation','Admin\ActsRegulationController@post_acts_and_regulation')->name('post_acts_and_regulation');
    Route::get('acts_and_regulation','Admin\ActsRegulationController@edit_acts_and_regulation')->name('edit_acts_and_regulation');
    Route::post('update_acts_and_regulation','Admin\ActsRegulationController@update_acts_and_regulation')->name('update_acts_and_regulation');
    Route::get('delete_acts_and_regulation','Admin\ActsRegulationController@delete_acts_and_regulation')->name('delete_acts_and_regulation');

    //Member List Route
    Route::get('member_lists','Admin\MemberListController@get_member_lists')->name('get_member_lists');
    Route::get('add_member_list','Admin\MemberListController@add_member_list')->name('add_member_list');
    Route::post('post_member_list','Admin\MemberListController@post_member_list')->name('post_member_list');
    Route::get('member_list','Admin\MemberListController@edit_member_list')->name('edit_member_list');
    Route::post('update_member_list','Admin\MemberListController@update_member_list')->name('update_member_list');
    Route::get('delete_member_list','Admin\MemberListController@delete_member_list')->name('delete_member_list');

    //News and Update
    Route::get('news_and_updates','Admin\NewsUpdateController@get_news_and_updates')->name('get_news_and_updates');
    Route::get('add_news_and_update','Admin\NewsUpdateController@add_news_and_update')->name('add_news_and_update');
    Route::post('post_news_and_update','Admin\NewsUpdateController@post_news_and_update')->name('post_news_and_update');
    Route::get('news_and_update','Admin\NewsUpdateController@edit_news_and_update')->name('edit_news_and_update');
    Route::post('update_news_and_update','Admin\NewsUpdateController@update_news_and_update')->name('update_news_and_update');
    Route::get('delete_news_and_update','Admin\NewsUpdateController@delete_news_and_update')->name('delete_news_and_update');

    //Gallery Route
    Route::get('get_gallery','Admin\GalleryController@get_gallery')->name('get_gallery');
    Route::get('add_gallery','Admin\GalleryController@add_gallery')->name('add_gallery');
    Route::post('post_gallery','Admin\GalleryController@post_gallery')->name('post_gallery');
    Route::get('gallery','Admin\GalleryController@edit_gallery')->name('edit_gallery');
    Route::post('update_gallery','Admin\GalleryController@update_gallery')->name('update_gallery');
    Route::get('delete_gallery','Admin\GalleryController@delete_gallery')->name('delete_gallery');

    //CentralBankMessage Rote
    Route::get('get_message','Admin\CentralBankMessageController@get_message')->name('get_message');
    Route::get('add_message','Admin\CentralBankMessageController@add_message')->name('add_message');
    Route::post('post_message','Admin\CentralBankMessageController@post_message')->name('post_message');
    Route::get('message','Admin\CentralBankMessageController@edit_message')->name('edit_message');
    Route::post('update_message','Admin\CentralBankMessageController@update_message')->name('update_message');
    Route::get('delete_message','Admin\CentralBankMessageController@delete_message')->name('delete_message');

    //Change Password Route
    Route::get('change_password','Admin\LoginController@change_password')->name('change_password');
    Route::post('post_change_password','Admin\LoginController@post_change_password')->name('post_change_password');

    //logout route
    Route::get('logout','Admin\LoginController@logout')->name('logout');
});




