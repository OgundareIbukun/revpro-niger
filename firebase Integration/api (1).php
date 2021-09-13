<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/







/*Route::group(function (){

});*/
Route::post('/v1/login', 'ApiPassportAuth@login')->middleware('agents');
Route::post('/v1/register', function (){
    return response()->json([
        'status' => 'error',
        'message' => 'Only admin can register agents'
    ], 401);
});//'ApiPassportAuth@register');




// Callback endpoints for Moneta API
Route::get('/v1/revenue/update', 'RevenueController@update');
Route::get('/v1/remittance/agent/update', 'RemittanceController@update');
Route::get('/v1/remittance/monetaTxn/{agent_id}/{amount}','RemittanceController@storePayment');   // old callback
Route::get('/v1/remittance/monetacallback/{agent_id}/{month}/{amount}','RemittanceController@storePayment');

//lga revenue  called by MDA: it has token
Route::get('/v1/lga/revenue', 'RevenueController@lgaRevenue');
Route::get('/v1/lga/last_txn', 'RevenueController@getLastTnxRevenue');
Route::get('/v1/lga/moneta_txn', 'RevenueController@getMonetaTxn');



  // testing purpose
  Route::get('/testing',function(){
      $agent = \App\Agent::first();
    $agent->revenue_point()->sync([1,3,6]);
      //$rev = \App\RevenuePoint::
        return 'stored';
  });






Route::prefix('v1')->middleware('auth:api')->group(function(){
    Route::get('/details', 'ApiPassportAuth@details');

    // change Password
    Route::post('/changepassword', 'ApiPassportAuth@changePassword');


    //Agent
    Route::get('/agent/search', 'AgentController@search');
    Route::get('/agent', 'AgentController@index');
    Route::post('/agent', 'AgentController@store');
    Route::get('/agent/{agent}', 'AgentController@show');


    //IndividualTaxPayer
    // Route::get('/v1/customer/search', 'IndividualTaxPayerController@search');
    Route::get('/individualtaxpayer', 'IndividualTaxPayerController@index');
    Route::post('/individualtaxpayer', 'IndividualTaxPayerController@store');
    Route::get('/individualtaxpayer/{individualtaxpayer}', 'IndividualTaxPayerController@show');


    //Remittance
    Route::get('/remittance/agent/{agent}/pending', 'RemittanceController@pending');
    Route::post('/remittance/agent/remit', 'RemittanceController@remit');
    Route::get('/remittance/agent/{agent}/history', 'RemittanceController@history');

    Route::get('/remittance/updateTxn', 'RemittanceController@updateTxnForChannelAndStatus');

   // unremit listing
    Route::get('/unremittedcash/agent/{agent}', 'RemittanceController@unremitList');


    //Revenue
    Route::get('/revenue', 'RevenueController@index');
    Route::post('/revenue', 'RevenueController@store');
    Route::post('/revenue/bulk', 'RevenueController@storeBulkPayment');

    // quick Print
    Route::post('/revenue/quickprint', 'RevenueController@storeQuickPrint');

    // old history
    Route::get('/revenue/agent/{agent}', 'RevenueController@agent');
    Route::get('/revenue/quickprint/agent/{agent_id}','RevenueController@getQuickPrintInvoices');


      // History
    Route::post('/revenue/quickprint/history', 'RevenueController@getQuickPrintInvoiceHistory');
    Route::post('/revenue/bulk/history', 'RevenueController@getSingleAndBulkInvoiceHistory');



    //enforce
    Route::get('/revenue/enforce', 'RevenueController@enforce');



    //Service
    Route::get('/service', 'ServiceController@index');
    // Route::post('/service', 'ServiceController@store');
   // Route::get('/service/{service}', 'ServiceController@show');

    //State
    Route::get('/state', function(){
        return response()->json(['status' => 'success', 'data' => \App\State::all()]);

    });

    //Lgas
    Route::get('/state/{state}/lgas', function (\App\State $state) {
        return response()->json(['status' => 'success', 'data' => $state->lgas()->get()]);
    });


//category
    Route::get('/category', 'CategoryController@index');
    // Route::get('/category/create', 'CategoryController@create');



    // revenue point
    Route::get('/revenuepoint', 'RevenuePointController@index');

});

Route::get('firebase', 'Firebase@index');