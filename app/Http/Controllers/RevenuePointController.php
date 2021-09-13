<?php

namespace App\Http\Controllers;

 use App\RevenuePoint;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;

 use App\Category;
 use App\QuickPrintInvoice;
 use App\Remittance;
 use App\Service;
 use App\Agent;
 use App\Revenue;
 use App\Lga;
use App\PointService;
use App\User;
 use Illuminate\Support\Carbon;
 use Illuminate\Support\Facades\DB;

 class RevenuePointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rev_point = RevenuePoint::with('lga.state')
           ->get();



        return response()->json([
            'status' => 'success',
            'data' => $rev_point
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'state_id' => 'required',
            'lga_id' => 'required'
        ]);

        $rev_point = RevenuePoint::create([

            'name'=> $validate['name'],
            'type'=> implode(',',$validate['type']),
            'state_id'=> $validate['state_id'],
            'lga_id'=> $validate['lga_id'],

        ]);

        return response()->json([
            'status' => 'success',
            'data' => $rev_point
        ], 201);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RevenuePoint $revenuepoint)
    {


        return response()->json([
            'status' => 'success',
            'data' => $revenuepoint
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RevenuePoint $revenuepoint)
    {
        //

        return response()->json([
            'status' => 'success',
            'data' => $revenuepoint
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RevenuePoint $revenuepoint)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'state_id' => 'required',
            'lga_id' => 'required'
        ]);



           $revenuepoint->update([

            'name'=> $validate['name'],
            'type'=> implode(',',$validate['type']),
            'state_id'=> $validate['state_id'],
            'lga_id'=> $validate['lga_id'],

        ]);

        return response()->json([
            'status' => 'success',
            'data' => $revenuepoint
        ], 201);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RevenuePoint $revenuepoint)
    {
        $revenuepoint->delete();

        return response()->json([], 204);
    }

    public function type(){

//
//        $type[0]['id']=1;  $type[0]['name']='Market';
//        $type[1]['id']=2 ; $type[1]['name']='Control Post';
//        $type[2]['id']=3; $type[2]['name']='Motor Park';


        $type[0]='Market';
        $type[1]='Control Post';
        $type[2]='Motor Park';

//        $type[0]['name']='Market';
//        $type[1]['name']='Control Post';
//        $type[2]['name']='Motor Park';

      //   return $type;

        return response()->json([
            'status' => 'success',
            'data' =>  $type
        ]);

    }


    public function listRevPoint()
    {
        $user =  Auth::user();
        $lga_id =  $user->lga_id;
        //  get revenue point for director of revenuE and HOD
        if( $user->role_id  == env('DIR_REVENUE') || $user->role_id  == env('HOD')){

            $rev_point = RevenuePoint:: whereHas('lga', function($query) use($lga_id){
                $query->where('lga_id','=',$lga_id);
            })
            ->with('lga.state')
                ->get();


        }


        else {
            //if (  $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN')){   // superadmin

            $rev_point = RevenuePoint::with('lga.state')
                ->get();


        }


        $i=0;  $data=array();
        foreach( $rev_point  as $rvpt){

            $data[$i]['sn'] = $i+1;
            $data[$i]['id'] = $rvpt['id'];
            $data[$i]['name'] = $rvpt['name'];
            $data[$i]['type'] = $rvpt['type'];
          //  $data[$i]['state_id'] = $rvpt['lga']['state']['id'];
            $data[$i]['lga_id'] = $rvpt['lga']['id'];
            $data[$i]['lga_name'] = $rvpt['lga']['name'];
            $services = PointService::where('revenue_point_id',$rvpt['id'])->pluck('service_id');
            $service_details = [];

            foreach($services as $service){
                $service_details[] = [
                    'key' => Service::where('id',$service)->first()->name,
                    'value' => $service
                ];

            }
            $data[$i]['services'] = $service_details;
            $i++;

        }





        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);


    }



    public  function getRevPointInLga(Request $request){

        $data = RevenuePoint::          //with('lga.state')
        where('lga_id', $request->lga_id)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }



    public function revPointInLga(Request $request)
    {
              $lga = $request->lga_id;

        $user =  Auth::user();
        $lga_id =  $user->lga_id;
        //  get revenue point for director of revenuE and HOD
        if( $user->role_id  == env('DIR_REVENUE') || $user->role_id  == env('HOD')){

            $rev_point = RevenuePoint:: whereHas('lga', function($query) use($lga_id){
                $query->where('lga_id','=',$lga_id);
            })
                ->with('lga.state')
                ->get();


        }


        else if (  $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN')) {      // superadmin

            if ($lga == '') {
                $rev_point = RevenuePoint::   //with('lga.state')
                get();
            } else{
                $rev_point = RevenuePoint::          //with('lga.state')
                where('lga_id', $lga)
                    ->get();

        }


        }
                   $data=[];
             foreach($rev_point as $rev_pt){

                     $data[]  = $rev_pt['name'];
             }





        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);


    }



     function summary(Request $request){


         $validate = $request->validate([
             'fromDate' => 'sometimes',
             'toDate' => 'sometimes',
           'revpoint_id'=>'sometimes',
             'lga_id'=>'sometimes',
         ]);


         $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate'];
         $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString(): $validate['toDate'];
         $revpoint =  $validate['revpoint_id'];
         $lga =  $validate['lga_id'];


            $user = Auth::user();
            if($user->role_id == env('DIR_REVENUE') || $user->role_id == env('HOD')  ){

                $lga_id =  $user->lga_id;
                $lgaName = Lga::where('id',$lga_id )->get('name');
                    $lga = $lga_id;

            }


                 $invoices = Revenue::select(DB::raw('SUM(revenues.amount) as amount'),'revenues.status','revenues.revenue_point_id'     )
                   //  ->join('logs', 'logs.id', '=', 'revenues.log_id')
                     ->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                     ->when($lga&&!$revpoint  ||($user->role_id == env('DIR_REVENUE') ) , function ($query) use($lga) {
                         return $query->where('revenue_points.lga_id','=', $lga);
                     })
                     ->when($lga&&$revpoint, function ($query) use($revpoint) {
                         return $query->where('revenue_points.id','=', $revpoint);
                     })
                     ->where('revenues.status','success')
                     ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate .'")'), DB::raw('date("'.$toDate.'")')])
                     ->groupBy('revenues.revenue_point_id')
                     ->get();


                 $quickPrints = QuickPrintInvoice::select(DB::raw('SUM(quick_print_invoices.amount) as amount'),'quick_print_invoices.revenue_point_id')
                     ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
                     ->when($lga&&!$revpoint || ($user->role_id == env('DIR_REVENUE') ), function ($query) use($lga) {
                         return $query->where('revenue_points.lga_id','=', $lga);
                     })
                     ->when($lga&&$revpoint, function ($query) use($revpoint) {
                         return $query->where('revenue_points.id','=', $revpoint);
                     })
                     ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate .'")'), DB::raw('date("'.$toDate.'")')])
                     ->groupBy('quick_print_invoices.revenue_point_id')
                     ->get();

                 $invoices_service = Revenue::select(DB::raw('SUM(revenues.amount) as amount'),'revenues.status','revenues.service_id'     )
                     //  ->join('logs', 'logs.id', '=', 'revenues.log_id')
                     ->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                     ->when($lga&&!$revpoint  ||($user->role_id == env('DIR_REVENUE') ), function ($query) use($lga) {
                         return $query->where('revenue_points.lga_id','=', $lga);
                     })
                     ->when($lga&&$revpoint, function ($query) use($revpoint) {
                         return $query->where('revenue_points.id','=', $revpoint);
                     })
                     ->where('revenues.status','success')
                     ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate .'")'), DB::raw('date("'.$toDate.'")')])
                     ->groupBy('revenues.service_id')
                     ->get();

                 $quickPrints_service = QuickPrintInvoice::select(DB::raw('SUM(quick_print_invoices.amount) as amount'),'quick_print_invoices.service_id')
                     ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
                     ->when($lga&&!$revpoint ||($user->role_id == env('DIR_REVENUE') ), function ($query) use($lga) {
                         return $query->where('revenue_points.lga_id','=', $lga);
                     })
                     ->when($lga&&$revpoint, function ($query) use($revpoint) {
                         return $query->where('revenue_points.id','=', $revpoint);
                     })
                     ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate .'")'), DB::raw('date("'.$toDate.'")')])
                     ->groupBy('quick_print_invoices.service_id')
                     ->get();

                 $revenuepoints = RevenuePoint:: select('revenue_points.name as revName','revenue_points.id', 'lgas.name as lgaName')
                     ->leftjoin('lgas', 'lgas.id','=','revenue_points.lga_id')
                     ->when($lga&&!$revpoint  ||($user->role_id == env('DIR_REVENUE') ), function ($query) use($lga) {
                         return $query->where('revenue_points.lga_id','=', $lga);
                     })
                     ->when($lga&&$revpoint, function ($query) use($revpoint) {
                         return $query->where('revenue_points.id','=', $revpoint);
                     })

                     ->get();

          //   }


         $services = Service::select('id','name') ->get();


         if($lga)
         {
             $lg = LGA::where('id', $lga)->get();
             $lga_name = $lg[0]['name'];
         } else
             $lga_name ='';


        $chatRevName = $chartReceipt = [];
         $data = array();
         $i=0;
           $totalInv = $totalReceipt = 0;
         foreach(  $revenuepoints  as  $revpoint ) {

             $data[$i]['sn'] = $i+1;
             $data[$i]['revptName'] = $revpoint['revName'];

             $data[$i]['lga'] = $revpoint['lgaName'];

               $receipt = $sum = 0;
             // $k=0;
             foreach ($invoices as $invoice) {

                 if($revpoint['id'] == $invoice['revenue_point_id']  )
                 {
                    // $sum = $sum + $invoice['amount'];
                    // $totalInv = $totalInv + $invoice['amount'];
                    //  $update = date('Y-m-d',strtotime($invoice['updated_at']));     && ( $update >= $fromDate &&  $update <= $toDate   )

                    // if( $invoice['status']  ==  'success'){
                         $receipt = $receipt + $invoice['amount'];
                         $totalReceipt = $totalReceipt + $invoice['amount'];

                    // }


                 }
             };

             foreach ($quickPrints as $invoice2) {

                 if($revpoint['id'] == $invoice2['revenue_point_id']  ){

                    // $sum = $sum + $invoice2['amount'];
                    // $totalInv = $totalInv + $invoice2['amount'];

                     $receipt = $receipt + $invoice2['amount'];
                     $totalReceipt = $totalReceipt + $invoice2['amount'];

                 }

             };

             $data[$i]['receipt'] =$receipt;
            // $data[$i]['total'] = 0;

            // if($lga && !$validate['revpoint_id']) {

                      $chatRevName[$i] = $revpoint['revName'];
                      $chartReceipt[$i]= $receipt;
            // }


             $i++;

         }



         $s=0;
         $serviceData =  [];
         $srvTotal = 0;

         foreach($services  as  $service ) {

             $sumSvr = $sumQP = 0;

             $serviceName[$s] = $service['name'];

             foreach ($invoices_service as $bs) {

                 if ($service['id'] == $bs['service_id']) {
                     $sumSvr = $sumSvr + $bs['amount'];
                     // $srvTotal = $srvTotal + $bs['amount'];

                 }
             }


             foreach ($quickPrints_service as $qp) {

                 if ($service['id'] == $qp['service_id']) {
                     $sumSvr = $sumSvr + $qp['amount'];

                 }
             }

             $serviceData[$s]['sn'] = $s+1;
             $serviceData[$s]['serviceName'] = $service['name'];
             $serviceData[$s]['receipt'] =  $sumSvr;

             $s++;


         }





         return response()->json([
             'status' => 'success',
             'data' => [
                 'summary' => $data,
                'service' => $serviceData,
                 'lgaName'=>$lga_name,
                  'creceipt'=>$chartReceipt,
                 'crevName'=>$chatRevName,

             ],
         ]);

     }


     function getLastSixMonthRevenue(Request $request)
     {


         $validate = $request->validate([
             'revpoint_id' => 'sometimes',

         ]);

         $revpt = $validate['revpoint_id'];

         $user = Auth::user();

        $BS= $QP =[];

         if ($user->role_id == env('HOD'))
         {
             $category_id =  $user->category_id;
             $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
             $category_name = $categoryObj[0]['name'];

             $lga = $user->lga_id;
             $BS = Revenue::select('revenues.amount', 'revenues.status', 'revenues.updated_at')
                 ->leftjoin('agents', 'revenues.agent_id', 'agents.id')
                 ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                 ->where([['revenue_points.lga_id', $lga], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
//                 ->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
//                 ->leftjoin('agents', 'users.userable_id', 'agents.id')
             //    ->where([['users.lga_id',$lga],['agents.dept', 'LIKE', '%'.$category_name.'%'], ['users.role_id', env('AGENT')]])
                 ->when($revpt, function ($query) use ($revpt) {
                     return $query->where('revenues.revenue_point_id', '=', $revpt);
                 })
                 ->where('revenues.status', 'success')
                 ->whereBetween(DB::raw('date(revenues.updated_at)'),
                     [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
                 ->orderBy('revenues.updated_at')
                 ->get();

             $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')

                 ->leftjoin('agents', 'quick_print_invoices.agent_id', 'agents.id')
                 ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                 ->where([['revenue_points.lga_id', $lga], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
//                 ->leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
//                 ->leftjoin('agents', 'users.userable_id', 'agents.id')
//                 ->where([['users.lga_id',$lga],['agents.dept', 'LIKE', '%'.$category_name.'%'], ['users.role_id', env('AGENT')]])
             ->when($revpt, function ($query) use ($revpt) {
                     return $query->where('quick_print_invoices.revenue_point_id', '=', $revpt);
                 })
                 ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                     [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
                 ->orderBy('quick_print_invoices.updated_at')
                 ->get();

         }
         else if ($user->role_id == env('DIR_REVENUE'))
         {

             $lga = $user->lga_id;
             $BS = Revenue::select('revenues.amount', 'revenues.status', 'revenues.updated_at')
                 ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id' )
                 ->where('revenue_points.lga_id', $lga )

//                 ->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
//                 ->where(['users.lga_id' => $lga, 'users.role_id'=> env('AGENT')])

                 ->when($revpt, function ($query) use ($revpt) {
                     return $query->where('revenues.revenue_point_id', '=', $revpt);
                 })
                 ->where('revenues.status', 'success')
                 ->whereBetween(DB::raw('date(revenues.updated_at)'),
                     [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
                 ->orderBy('revenues.updated_at')
                 ->get();

             $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')

                 ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                 ->where('revenue_points.lga_id', $lga)
               //  ->leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
                 //        ->where(['users.lga_id' => $lga, 'users.role_id'=> env('AGENT')])
                 ->when($revpt, function ($query) use ($revpt) {
                     return $query->where('quick_print_invoices.revenue_point_id', '=', $revpt);
                 })
                 ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                     [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
                 ->orderBy('quick_print_invoices.updated_at')
                 ->get();


         }
         else{
             $BS = Revenue::select('revenues.amount', 'revenues.status', 'revenues.updated_at')
                 ->when($revpt, function ($query) use ($revpt) {
                     return $query->where('revenues.revenue_point_id', '=', $revpt);
                 })
                 ->where('revenues.status', 'success')
                 ->whereBetween(DB::raw('date(revenues.updated_at)'),
                     [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
                 ->orderBy('revenues.updated_at')
                 ->get();

         $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')
             ->when($revpt, function ($query) use ($revpt) {
                 return $query->where('quick_print_invoices.revenue_point_id', '=', $revpt);
             })
             ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                 [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
             ->orderBy('quick_print_invoices.updated_at')
             ->get();

     }






         //quick_print_invoices

         //   $date = Carbon::now();



         $firstMonthName =    date('M', strtotime('-5 month')); // Carbon::now()->subMonth(5)->format('F');
         $secondMonthName = date('M', strtotime('-4 month')); // Carbon::now()->subMonth(4)->format('F');
         $thirdMonthName =  date('M', strtotime('-3 month')); // Carbon::now()->subMonth(3)->format('F');
         $forthMonthName =  date('M', strtotime('-2 month'));  //Carbon::now()->subMonth(2)->format('F');
         $fifthMonthName =  date('M', strtotime('-1 month'));   // Carbon::now()->subMonth(1)->format('F');
         $sixthMonthName =  date('M');  //Carbon::now()->format('F');



         // revenue of each month
         $month_rev[1] = $month_rev[2] = $month_rev[3]=  0;
         $month_rev[4] = $month_rev[5] = $month_rev[6] =0 ;
         //  $inv1 = $inv2 = $inv3 = $inv4 = $inv5 = $inv6 =0 ;


         foreach($BS as $rev){

             $m = substr($rev['updated_at'],5,2);
             $month_rev[$this->indexMonth($m)] = $month_rev[$this->indexMonth($m)] + $rev['amount'];
         }



         foreach($QP as $rev2){

             $mnth = substr($rev2['updated_at'],5,2);
             $month_rev[$this->indexMonth($mnth)] = $month_rev[$this->indexMonth($mnth)] + $rev2['amount'];    //add up rev
         }


         // Name of month
         $month[0] =$firstMonthName; $month[1] =$secondMonthName; $month[2] =$thirdMonthName; $month[3] =$forthMonthName; $month[4] = $fifthMonthName; $month[5] =$sixthMonthName;
//


         // Re-arrange the data in array
         $mnth_rev = $month_rev;
         $i=0;  $j=1;
         foreach($month_rev as $rev ){
             $revenues[$i] = $mnth_rev[$j];
             // $paid_invoice[$i] = $month_paid[$j];
             $j++; $i++;
         }



         return response()->json([
             'status' => 'success',
             'data' => [
                 'lastSixMonthRev' => $revenues,
                 'monthName' => $month,
                  'dd'=>  env('DIR_REVENUE'),
             ]
         ]);





     }


     function indexMonth($month){


         if( $month  == date('m', strtotime('-5 month')))
             return 1;
         else if( $month  == date('m', strtotime('-4 month')) )
             return 2;
         else if( $month  ==  date('m', strtotime('-3 month'))  )
             return 3;
         else if( $month  == date('m', strtotime('-2 month')) )
             return 4;
         else if( $month  == date('m', strtotime('-1 month')) )
             return 5;
         else if( $month  == date('m'))
             return 6;

     }









 }
