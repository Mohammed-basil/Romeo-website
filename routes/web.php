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
// Route::get('/', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/',[
    'uses'=>  'IndexController@index',
    'as'=>'index'
  ]);
  
Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::group(['middleware'=>'is-ban'], function(){


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

 
Route::get('/contact',[
    'uses'=>  'ContactController@index',
    'as'=>'contact'
  ]);
  
  Route::get('/notifiction',[
    'uses'=>  'NotificationController@markAllAsRead',
    'as'=>'notifiction.AllAsRead'
  ]);
  Route::get('/notifiction/{id}',[
    'uses'=>  'NotificationController@markAsRead',
    'as'=>'notifiction.AsRead'
  ]);
Route::get('/balance/send',[
  'uses'=>  'BalanceController@index',
  'as'=>'send'
]);

Route::post('/balance/confirm',[

    'uses'=>'BalanceController@confirm',
    'as'=>'send.confirm'
]);

Route::get('/balance/office',[
    'uses'=>  'OfficesController@index',
    'as'=>'offices.send'
]);
Route::get('/user/offices',[
    'uses'=>  'OfficesController@index2',
    'as'=>'user.offices'
]);
Route::post('/balance/office/send',[
        'uses'=>  'OfficesController@send',
        'as'=>'office.confirm'
]);

Route::post('/balance/office/fetch',[
            'uses'=>  'OfficesController@fetch',
            'as'=>'office.fetch'
]);


Route::post('/balance/send/fetch',[
    'uses'=>  'BalanceController@fetch',
    'as'=>'send.fetch'
]);

Route::post('/balance/exchange/fetch',[
    'uses'=>  'CurrenciesController@fetch',
    'as'=>'exchange.fetch'
]);

Route::get('/office/log',[
            'uses'=>  'OfficesController@review',
            'as'=>'send.review'
])->middleware('OfficePage');

Route::get('/exchange',[
    'uses'=>'CurrenciesController@index',
    'as'=>'index.exchange'
]);



Route::post('/exchange/confirm',[
    'uses'=>'CurrenciesController@exchange',
    'as'=>'exchanges'
]);

Route::get('/currency/price',[
    'uses'=>'CurrenciesController@index2',
    'as'=>'currencies.price'
]);

Route::get('/profile',[
    'uses'=>'ProfileController@index',
    'as'=>'user.profile'
]);
Route::post('/profile/update/{id}',[
    'uses'=>'ProfileController@update',
    'as'=>'profile.update'
]);



Route::get('/withdrawlogs',[
    'uses'=>'ProfileController@withdrawlogs',
    'as'=>'user.withdrawlogs'
]);

Route::get('/depositlogs',[
    'uses'=>'ProfileController@depositlogs',
    'as'=>'user.depositlogs'
]);

Route::get('/exchangelogs',[
    'uses'=>'ProfileController@exchangelogs',
    'as'=>'user.exchangelogs'
]);

Route::get('/officelogs',[
    'uses'=>'ProfileController@officelogs',
    'as'=>'user.officelogs'
]);

Route::post('/profile/password',[
    'uses'=>'ProfileController@change_pass',
    'as'=>'password.update'
]);


//////////////////////////////////////////////////////


Route::get('/admin/users',[
    'uses'=>   'UserController@index',
    'as'=>'users'
])->middleware('AdminUsersPage');

Route::get('/admin/offices',[
    'uses'=>'UserController@offices',
    'as'=>'offices'
])->middleware('AdminOfficesPage');

Route::get('/admin/currency',[
    'uses'=>'BuySellController@index',
    'as'=>'currencies'
])->middleware('AdminCurrenciesPage');


Route::post('/admin/currency/update/{id}',[
    'uses'=>'BuySellController@update',
    'as'=>'currencies.update'
])->middleware('AdminCurrenciesPage');

Route::get('/admin/support',[
    'uses'=>'SupportController@index',
    'as'=>'support'
])->middleware('AdminSupportPage');

Route::post('/admin/support/whatsapp/update/{id}',[
    'uses'=>'SupportController@update2',
    'as'=>'whatsapp.update'
])->middleware('AdminSupportPage');

Route::post('/admin/support/whatsapp/create',[
    'uses'=>'SupportController@store',
    'as'=>'whatsapp.create'
])->middleware('AdminSupportPage');

Route::get('/admin/support/whatsapp/delete/{id}',[
    'uses'=>'SupportController@destroy',
    'as'=>'whatsapp.delete'
])->middleware('AdminSupportPage');

Route::post('/admin/support/socialmedia/update',[
    'uses'=>'SupportController@update',
    'as'=>'socialmedia.update'
])->middleware('AdminSupportPage');


Route::get('/admin/fee',[
    'uses'=>'FeesController@index',
    'as'=>'fee'
])->middleware('AdminFeePage');

Route::post('/admin/fee/update',[
    'uses'=>'FeesController@update',
    'as'=>'fee.update'
])->middleware('AdminFeePage');


Route::get('/admin/logs',[
    'uses'=>'LogsController@index',
    'as'=>'logs'
])->middleware('AdminLogsPage');

Route::get('/admin/officelogs',[
    'uses'=>'LogsController@officelogs',
    'as'=>'officelogs'
])->middleware('AdminOfficeLogsPage');

Route::get('/admin/exchangelogs',[
    'uses'=>'LogsController@exchangelogs',
    'as'=>'exchangelogs'
])->middleware('AdminExchangeLogsPage');


Route::get('/admin/users/active',[
    'uses'=>'UserController@user_active',
    'as'=>'active'
])->middleware('AdminActiveUserPage');

Route::get('/admin/offices/active',[
    'uses'=>'UserController@office_active',
    'as'=>'office.active'
])->middleware('AdminActiveOfficePage');


Route::get('/user/active/{id}',[
    'uses'=>'UserController@active',
    'as'=>'user.active'
])->middleware('AdminActiveUserPage');

Route::get('/office/active/{id}',[
    'uses'=>'OfficesController@active',
    'as'=>'office.active'
])->middleware('AdminActiveOfficePage');


Route::get('/user/rejectactive/{id}',[
    'uses'=>'UserController@notactive',
    'as'=>'user.reject'
])->middleware('AdminActiveUserPage');

Route::get('/office/rejectactive/{id}',[
    'uses'=>'OfficesController@notactive',
    'as'=>'office.reject'
])->middleware('AdminActiveOfficePage');


Route::get('/admin/fee/balance',[
    'uses'=>'FeesController@fee_balance',
    'as'=>'fee.balance'
])->middleware('AdminFeeBalancePage');


Route::get('/user/permission',[
    'uses'=>'PermissionsController@getUserPermission',
    'as'=>'user.permissions'
])->middleware('AdminUsersPage');


Route::post('/user/permission/update/{id}',[
    'uses'=>'PermissionsController@UserUpdate',
    'as'=>'user.permission.update'
])->middleware('AdminUsersPage');

Route::get('/office/permission',[
    'uses'=>'PermissionsController@getOfficePermission',
    'as'=>'office.permissions'
])->middleware('AdminOfficesPage');

Route::post('/office/permission/update/{id}',[
    'uses'=>'PermissionsController@OfficeUpdate',
    'as'=>'office.permission.update'
])->middleware('AdminOfficesPage');


////////////////////////////excel////////////////////////
Route::get('/excel_withdrawals',[
    'uses'=>'ExcelController@withdrawals',
    'as'=>'excel.withdrawals'
]);

Route::get('/excel_deposit',[
    'uses'=>'ExcelController@deposit',
    'as'=>'excel.deposit'
]);

Route::get('/excel_exchange',[
    'uses'=>'ExcelController@exchange',
    'as'=>'excel.exchange'
]);

Route::get('/excel_offices',[
    'uses'=>'ExcelController@offices',
    'as'=>'excel.offices'
]);

Route::get('/excel_admin_log',[
    'uses'=>'ExcelController@admin_log',
    'as'=>'excel.admin_log'
])->middleware('AdminLogsPage');

Route::get('/excel_admin_exchange_log',[
    'uses'=>'ExcelController@admin_exchange_log',
    'as'=>'excel.admin_exchange_log'
])->middleware('AdminExchangeLogsPage');

Route::get('/excel_admin_office_log',[
    'uses'=>'ExcelController@admin_office_log',
    'as'=>'excel.admin_office_log'
])->middleware('AdminOfficeLogsPage');


Route::get('/excel_admin_users',[
    'uses'=>'ExcelController@admin_users',
    'as'=>'excel.admin_users'
])->middleware('AdminUsersPage');

Route::get('/excel_admin_offices',[
    'uses'=>'ExcelController@admin_offices',
    'as'=>'excel.admin_offices'
])->middleware('AdminOfficesPage');

////////////////////////////////// search //////////////////////////////////

Route::get('/search/depositlogs', 'SearchController@depositlogs');
Route::get('/search/exchangelogs', 'SearchController@exchangelogs');
Route::get('/search/officelogs', 'SearchController@officelogs');
Route::get('/search/withdrawlogs', 'SearchController@withdrawlogs');
Route::get('/search/office', 'SearchController@office');

Route::get('/search/admin/logs', 'SearchController@admin_logs')->middleware('AdminLogsPage');
Route::get('/search/admin/exchangelogs', 'SearchController@admin_exchangelogs')->middleware('AdminExchangeLogsPage');
Route::get('/search/admin/officelogs', 'SearchController@admin_officelogs')->middleware('AdminOfficeLogsPage');
Route::get('/search/admin/users', 'SearchController@admin_users')->middleware('AdminUsersPage');
Route::get('/search/admin/offices', 'SearchController@admin_offices')->middleware('AdminOfficesPage');
Route::get('/search/admin/users_active', 'SearchController@admin_users_active')->middleware('AdminActiveUserPage');
Route::get('/search/admin/offices_active', 'SearchController@admin_offices_active')->middleware('AdminActiveOfficePage');





/////////////////////////////////////
//////////////////////////office_accept_reject_transaction//////////////////////////
Route::get('/office/send/review/accept',[
    'uses'=>'OfficesController@accept',
    'as'=>'office.send.accept'
])->middleware('OfficePage');

Route::get('/office/send/review/reject/{id}',[
    'uses'=>'OfficesController@reject',
    'as'=>'office.send.reject'
])->middleware('OfficePage');
//////////////////////////////////////////ban and revokeuser///////////////////////////////////////////


Route::get('UserRevoke/{id}', array('as'=> 'users.revokeuser', 'uses' => 'UserController@revoke'))->middleware('AdminUsersPage');
Route::post('userBan', array('as'=> 'users.ban', 'uses' => 'UserController@ban'))->middleware('AdminUsersPage');

Route::get('OfficeRevoke/{id}', array('as'=> 'offices.revokeuser', 'uses' => 'OfficesController@revoke'))->middleware('AdminOfficesPage');
Route::post('officeBan', array('as'=> 'offices.ban', 'uses' => 'OfficesController@ban'))->middleware('AdminOfficesPage');


});




