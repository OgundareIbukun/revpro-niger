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
/*
Route::get('/', function () {
    return view('welcome');
});*/




Route::get('/', function () {
    //return view('/login');
    return redirect('/login');
});

Route::get('/main','ForgotPasswordController@index');

Route::get('/invoices','invoiceListingController@index');

Route::post('/resetpassword/initialize', 'ForgotPasswordController@initializeOTP');
Route::post('/resetpassword/verify', 'ForgotPasswordController@verifyOTP');
Route::post('/resetpassword/store', 'ForgotPasswordController@resetPassword');


Auth::routes();


Route::get('/tested', function () {
    //return view('/login');
    return   response()->json([
        'data'=>Auth::user()->load('permissions')
    ]);
});

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/lgas', 'UserController@storeLga');
Route::get('/lgas', 'UserController@getLga');
Route::put('/lgas/{lga}', 'UserController@updateLga');
Route::delete('/lgas/{lga}', 'UserController@destroyLga');

// database adjustment
Route::get('/adjust', 'databaseAdjusterController@index');

//Agent
Route::get('/agent/search', 'AgentController@search');
Route::get('/agent', 'AgentController@listAgent');
Route::post('/agent', 'AgentController@store');
Route::get('/agent/{agent}/edit', 'AgentController@edit');
Route::put('/agent/{agent}', 'AgentController@update');
Route::delete('/agent/{agent}', 'AgentController@destroy');
Route::post('/agents/lga', 'AgentController@agentInLga');
Route::post('/agent/device', 'AgentController@device');

Route::get('/agent_revpoints/{agent}', 'AgentController@agentRevpoint');

// Agent dashboard
Route::post('/agent-dashboard/metrics', 'agentDashboardController@metrics');
Route::post('/agent-dashboard/summary', 'agentDashboardController@summary');
Route::post('/agent-dashboard/bulkSinglePayment', 'agentDashboardController@bulkSingleInvoice');
Route::post('/agent-dashboard/collection', 'agentDashboardController@collectionDetails');
//Route::get('/agent-dashboard/bulkSinglePayment', 'agentDashboardController@bulkSingleInvoice');
Route::post('/agent-dashboard/remittance', 'agentDashboardController@remittance');
Route::post('/agent-dashboard/allremittance', 'agentDashboardController@remittanceForAllAgents');
Route::post('/agent-dashboard/lastSixMonthRev', 'agentDashboardController@getLastSixMonthRevenue');




//superAdmin Dashboard
Route::get('/dashboard/metrics1', 'DashboardController@metrics');
Route::post('/dashboard/lga', 'DashboardController@lga');
Route::get('/dashboard/lga1', 'DashboardController@lga');
Route::post('/dashboard/revpoint', 'DashboardController@RevPoint');
Route::get('/dashboard/revpoint1', 'DashboardController@RevPoint');

// Dir of Revenue dashboard
Route::get('/dashboard/dir-revenue/metrics', 'DirOfRevDashboardController@metrics');
Route::get('/dashboard/dir-revenue/revenuepoint', 'DirOfRevDashboardController@revenuepoint');
Route::get('/dashboard/dir-revenue/agent', 'DirOfRevDashboardController@agent');



// LG Chairman dashboard
Route::get('/dashboard/lg-chairman/metrics', 'LgChairmanDashboardController@metrics');
Route::get('/dashboard/lg-chairman/revenue', 'LgChairmanDashboardController@revenue');
Route::get('/dashboard/lg-chairman/revenuepoint', 'LgChairmanDashboardController@revenuepoint');
Route::get('/dashboard/lg-chairman/lga', 'LgChairmanDashboardController@lga');



// Commissioner dashboard
Route::post('/dashboard/commissioner/metrics', 'CommissionerDashboardController@metrics');
Route::post('/dashboard/commissioner/revenue', 'CommissionerDashboardController@revenue');
Route::post('/dashboard/commissioner/component', 'CommissionerDashboardController@revComponentAndRemittance');
Route::post('/dashboard/commissioner/lga', 'CommissionerDashboardController@lga');
Route::post('/dashboard/commissioner/summary', 'CommissionerDashboardController@lgaSummary');



// HOD Invoice listing
//Route::post('/dashboard/hod/index', 'HodDashboardController@index');
// Route::post('/dashboard/hod', 'HodDashboardController@search');

 // Invoice Listing
Route::post('/noncash-invoice', 'invoiceListingController@noncashInvoices');
Route::post('/cash-invoice', 'invoiceListingController@cashInvoices');
Route::get('/paymentstatus', 'invoiceListingController@getpaymentStatus');    // to get payment status
Route::get('/invoice/{ref}', 'invoiceListingController@getInvoice');
// Route::get('/invoice1', 'invoiceListingController@search');  // testing


//Revenue
Route::get('/revenue', 'RevenueController@getRevenue');


//Remittance

Route::get('/remittance/initialize', 'RemittanceController@initialize');

Route::get('/cashreceipt/{txn_ref}', 'RemittanceController@getCashReceipt');
Route::post('/remittance/amountDue', 'RemittanceController@getAmountDue');
Route::post('/remittance/reVerify', 'RemittanceController@verifyPendingTxn');
//Route::get('/initialize', 'RemittanceController@initialize');
Route::post('/remittance', 'RemittanceController@remittanceList');

//Service
Route::get('/service', 'ServiceController@listServices');
//Route::get('/service/create', 'ServiceController@create');
Route::post('/service', 'ServiceController@store');
Route::put('/service/{service}', 'ServiceController@update');
Route::delete('/service/{service}', 'ServiceController@destroy');
Route::get('/services/all','ServiceController@getServices');


// Range in a service
Route::get('/service/{service}/ranges', 'ServiceController@getRanges');
Route::post('/range', 'ServiceController@storeRanges');
Route::put('/range', 'ServiceController@updateRanges');
Route::delete('/range/{range}', 'ServiceController@deleteRanges');




//category
//Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::put('/category/{category}', 'CategoryController@update');
//Route::delete('/category/{category}', 'CategoryController@destroy');
Route::get('/getcategory', 'CategoryController@getall');  // fetch all category name
Route::get('/getcategory/all', 'CategoryController@fetchall');   // fetch all category/dept


// revenuepoint
Route::get('/revenuepoint', 'RevenuePointController@listRevPoint');
Route::post('/revenuepoint', 'RevenuePointController@store');
Route::put('/revenuepoint/{revenuepoint}', 'RevenuePointController@update');
Route::delete('/revenuepoint/{revenuepoint}', 'RevenuePointController@destroy');
Route::get('/revenuepoint_type', 'RevenuePointController@type');
Route::post('/revenuepoints/lga', 'RevenuePointController@revPointInLga');

Route::post('/revpoint-dashboard/summary', 'RevenuePointController@summary');
Route::post('/revpoint-dashboard/lastSixMonthRev', 'RevenuePointController@getLastSixMonthRevenue');
Route::post('/revpoint/lga', 'RevenuePointController@getRevPointInLga');




//IndividualTaxPayer   - may be removed later
// Route::get('/v1/customer/search', 'IndividualTaxPayerController@search');
Route::get('/individualtaxpayer', 'IndividualTaxPayerController@index');
Route::post('/individualtaxpayer', 'IndividualTaxPayerController@store');
Route::get('/individualtaxpayer/{individualtaxpayer}', 'IndividualTaxPayerController@show');


Route::get('/settlement', 'SettlementController@index');


Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@store');
Route::put('/user/{user}', 'UserController@update');
Route::delete('/user/{user}', 'UserController@destroy');
Route::get('/user/details', 'UserController@userDetails');
Route::post('/changepassword', 'UserController@changePassword');


//Agent
Route::get('/training/videos', 'TrainingController@getVideos');
Route::post('/training/videos', 'TrainingController@store');
Route::post('/training/videos/update/{training}', 'TrainingController@update');
Route::delete('/training/videos/{training}', 'TrainingController@destroy');
Route::post('/training/status', 'TrainingController@updateStatus');

Route::post('/training/docs', 'TrainingController@store');
Route::get('/training/docs', 'TrainingController@getDocs');
Route::post('/training/docs/update/{training}', 'TrainingController@update');
Route::delete('/training/docs/{training}', 'TrainingController@destroy');

Route::get('/lgaRev', 'RevenueController@lgaRevenue');


//View Permission
Route::get('/permissions', 'permissionController@index');
//Route::get('/service/create', 'ServiceController@create');
Route::post('/permissions', 'permissionController@store');
Route::put('/permission/{permission}', 'permissionController@update');
Route::delete('/permission/{permission}', 'permissionController@destroy');
Route::get('/permission_name', 'permissionController@permissionName');

// quick Print
Route::post('/revenue/quickprint', 'RevenueController@storeQuickPrint');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/role', function(){
    $roles = \App\Role::all();

    return response()->json([
        'status' => 'success',
        'data' => $roles
    ]);
});

 //State
 Route::get('/state', function(){
    $states = \App\State::all();

    return response()->json([
        'status' => 'success',
        'data' => $states
    ]);
 });

 // Bank listing
Route::get('/banks', function(){

    $bank=[];
    $bank = ['Access Bank','Polaris Bank','Keystone Bank Ltd','GT Bank','WEMA Bank Plc',
        'First Bank of Nigeria Plc','Heritage Bank','United Bank for Africa','Stanbic IBTC Bank','Unity Bank'];
    return response()->json(['status' => 'success',
        'data' => $bank
    ]);
});


 
 //Lgas
 Route::get('/state/{state}/lgas', function (\App\State $state) {

    $user = Auth::user();
      if($user->role_id == env('DIR_REVENUE') || $user->role_id == env('HOD') ){
         $lga_id= $user->lga_id;
          $lgas = $state->lgas() ->where('id','=', $lga_id)
              ->get();
      }
    else if( $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') ||  $user->role_id == env('COMMISSIONER')   ) {
        $lgas = $state->lgas()->get();
    }
    else{
        $lgas = $state->lgas()->where('id',$lga_id= $user->lga_id)->get();
    }




     Route::get('/lga', 'UserController@getLga');
    Route::put('/lga/{lga}', 'UserController@updateLga');
     Route::delete('/lga/{lga}', 'UserController@destroyLga');


     return response()->json([
         'status' => 'success',
         'data' => $lgas
     ]);
 });

   Route::get('testing',function(){

//         $fromDate = '2020-10-01';
//       $toDate = '2020-10-31';
//         $lga = '91';
//
//       $f =  date('m') - 5;
//       $s = date('m') - 4;
//       $t =  date('m') - 3;
//       $fo =  date('m') - 2;
//       $fi = date('m') - 1;
//       $si = date('m');

        $data =[];
      //  $data['1'=>$firstMonth,'2'=>$secondMonth,$thirdMonth, $forthMonth,$fifthMonth,$sixthMonth ];

       //  dd($data);

        $m =   date('m', strtotime('-1 month'));
       return response()->json([
           'status' => 'success',
           'data' => $m,

       ]);


   });
   Route::get('excel','ExcelController@createMda');