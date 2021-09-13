<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Lga;
use App\User;
use App\UnremittedCash;
use App\RevenuePoint;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::orderBy('created_at', 'desc')
            ->whereHas('user')
            //->whereHasMorph('agentable', ['App\Market'])
            ->with(['user', 'revenue_point'])
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $agents
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
        $validate = $request->validate([
            'users.name' => 'required',
            'users.email' => 'required|email|unique:users|max:255',
            'users.phone' => 'required|unique:users',
            'users.password' => 'required',
            'users.lga_id' => 'required',
            'cpassword' => 'required|same:users.password',
            'agents.dept' => 'required',
            'revenue_point_id' => 'required',
            'users.mac_id'=> 'sometimes',

        ]);

        $validate['users'] = array_merge($validate['users'], [
            'userable_id' => 1,
            'role_id' =>  env('AGENT'),
            'userable_type' => 'App\Agent'
        ]);

//        if(!isset($validata['agents'])) {
//            $validate['agents']['agentable_id'] = 1;
//            $validate['agents']['agentable_type'] = 'App\Market';
//        }
            $validate['agents']['cash_remittance'] = 0.00;

        $agent = Agent::create([
            'dept' =>  implode(',',$validate['agents']['dept']),
            'cash_remittance' => $validate['agents']['cash_remittance'],

        ]);


            $rev_id=[];

              foreach( $validate['revenue_point_id'] as $rev ){
                 $r = RevenuePoint::where('name', $rev)->first();
                     $rev_id[] = $r->id;
              }

          // add multiple rev point here
        $agent->revenue_point()->sync($rev_id);


        //$agent

        $validate['users']['mac_id'] = $request->ip();
        $user = $agent->user()->create($validate['users']);



        return response()->json([
            'status' => 'success',
            'data' => $agent->load(['user', 'revenue_point'])
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        return response()->json([
            'status' => 'success',
            'data' => $agent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return response()->json([
            'status' => 'success',
            'data' => $agent
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        $validate = $request->validate([
            'user.name' => 'required',
            'user.email' => 'required|email|max:255',
            'user.phone' => 'required',
            'user.lga_id' => 'required',
          //  'agent.max_collection' => 'required|numeric',
        //    'agent.remit_days' => 'required|numeric',
            'agent.dept' => 'required',
            'revenue_point_id' => 'required',
        ]);

//        if(!isset($validata['agents'])) {
//            $validate['agent']['agentable_id'] = 1;
//            $validate['agent']['agentable_type'] = 'App\Market';
//        }

        $agent->update( [
                'dept' =>  implode(',',$validate['agent']['dept']),
             //   'remit_days' => $validate['agent']['remit_days'],
             //   'max_collection' => $validate['agent']['max_collection'],

            ]);


        $rev_id=[];
               // change revenue_pt_name to rev_pt_id
        foreach( array_filter( $validate['revenue_point_id']) as $rev2 ){
            $r2 = RevenuePoint::where('name', $rev2)->first();
            $rev_id[] = $r2->id;
        }

        // update multiple rev point here
        $agent->revenue_point()->sync($rev_id);


        $validate['user']['mac_id'] = $request->ip();

        $agent->user()->update($validate['user']);


        return response()->json([
            'status' => 'success',
            'data' => $agent->load(['user', 'revenue_point'])
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->user()->delete();
        $agent->unremittedCashes()->delete();
        $agent->delete();

        return response()->json([], 204);
    }


    public function search(Request $request){
        $valid = $request->validate([
            'query' => 'required|min:2',
        ]);

        //$agents = Agent::with('user')
        $query_string = $valid['query'];
        $agents = Agent::whereHas('user', function($query) use($query_string){
                $query->where('name', 'LIKE', '%'.$query_string.'%')
                ->orWhere('phone', 'LIKE', '%'.$query_string.'%');
                    //->where('userable_type', 'App\\Agent');
            })
            ->with('user')
            //->where('users.name', 'LIKE', "")//"%".$request->query."%")
            ->limit(5)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $agents
        ]);
    }

   //
    public function listAgent()
    {


        $user =  Auth::user();
         // director of revenuE
        if( $user->role_id  == env('DIR_REVENUE')){
        $lga_id =  $user->lga_id;
        $agents = Agent::orderBy('agents.created_at', 'desc')
            ->whereHas('user', function($query) use($lga_id){
                $query->where('lga_id','=',$lga_id);
            })
            ->with(['user','revenue_point'])
            ->get();

            $unremitted = UnremittedCash::select('agent_id',DB::raw('sum(amount) as unremitted_cash'))
                ->GroupBy('agent_id')
                ->get();

        }

        else if( $user->role_id  == env('HOD')){
            $lga_id =  $user->lga_id;   // get  lga id of hod
            $category_id =  $user->category_id;     // get dept id of hod

              $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
            $category_name = $categoryObj[0]['name'];

            $agents = Agent::orderBy('agents.created_at', 'desc')
                ->whereHas('user', function($query) use($lga_id){
                    $query->where('lga_id','=',$lga_id);
                })
              ->where('dept', 'LIKE', '%'.$category_name.'%' )
                ->with(['user','revenue_point'])
                ->get();


            $unremitted = UnremittedCash::select('agent_id',DB::raw('sum(amount) as unremitted_cash'))
                ->GroupBy('agent_id')
                ->get();

        }
        else{
            //if ( $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') ){   // superadmin

            $agents = Agent::orderBy('agents.created_at', 'desc')
                ->whereHas('user')->with(['user.lga','revenue_point'])
              //  ->GroupBy('unremitted_cashes.agent_id','agents.id')
                ->get();

            $unremitted = UnremittedCash::select('agent_id',DB::raw('sum(amount) as unremitted_cash'))
                ->GroupBy('agent_id')
                ->get();

        }


             $i=0;  $data=array();
            foreach($agents as $agent){
                $uC = 0;
                $data[$i]['sn'] = $i+1;
                $data[$i]['id'] = $agent['id'];
                $data[$i]['name'] = $agent['user']['name'];
                $data[$i]['email'] = $agent['user']['email'];
                $data[$i]['phone'] = $agent['user']['phone'];
                $data[$i]['lga_id'] = $agent['user']['lga_id'];
                $data[$i]['lga_name'] =$agent['user']['lga']['name'];
                $data[$i]['dept'] = $agent['dept'];
                $data[$i]['device'] = ($agent['user']['mac_id'])?'locked':'unlocked';

                $rev_pt_name = implode(',', array_map(function($el){
                       return $el['name'];
                },$agent['revenue_point']->toArray()));

                $rev_pt_id = implode(',', array_map(function($el2){
                    return $el2['id'];
                },$agent['revenue_point']->toArray()));

                $data[$i]['revenue_point'] =   $rev_pt_name;  //$agent['revenue_point']['name'];
                 $data[$i]['revenue_point_id'] =   $rev_pt_id;  // $agent['revenue_point']['id'];
                //$data[$i]['unremitted_cash'] = $agent['cash_remittance'];
                $data[$i]['max_collection'] = $agent['max_collection'];
                $data[$i]['day'] = $agent['remit_days'];

                foreach ($unremitted as $unremit){

                      if($agent['id'] == $unremit['agent_id']){
                           $uC = $unremit['unremitted_cash'];
                      }
                }

                $data[$i]['unremitted_cash'] = $uC;


                $i++;

            }





        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }


    public function agentInLga(Request $request)
    {


        $user =  Auth::user();
        // director of revenuE
        if( $user->role_id  == env('DIR_REVENUE')){
            $lga_id =  $user->lga_id;
            $agents = Agent::orderBy('agents.created_at', 'desc')
                ->whereHas('user', function($query) use($lga_id){
                    $query->where('lga_id','=',$lga_id);
                })
                ->with(['user','revenue_point'])
                ->get();

        }

        else if( $user->role_id  == env('HOD')){
            $lga_id =  $user->lga_id;   // get  lga id of hod
            $category_id =  $user->category_id;     // get dept id of hod

            $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
            $category_name = $categoryObj[0]['name'];

            $agents = Agent::orderBy('agents.created_at', 'desc')
                ->whereHas('user', function($query) use($lga_id){
                    $query->where('lga_id','=',$lga_id);
                })
                ->where('dept', 'LIKE', '%'.$category_name.'%' )
                ->with(['user','revenue_point'])
                ->get();

        }
        else{
            //if ( $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN')){   // superadmin   // to filter lga
            $lga = $request->lga_id;
            $agents = Agent::orderBy('agents.created_at', 'desc')
                ->whereHas('user', function($query) use( $lga){
                    $query->where('lga_id','=',$lga);
                })
                ->with('user')
                ->get();

        }

        $i=0;  $data=array();
        foreach($agents as $agent){

            $data[$i]['sn'] = $i+1;
            $data[$i]['id'] = $agent['id'];
            $data[$i]['name'] = $agent['user']['name'];
            $data[$i]['email'] = $agent['user']['email'];
            $data[$i]['phone'] = $agent['user']['phone'];
            $data[$i]['lga_id'] = $agent['user']['lga_id'];


            $i++;

        }



        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }


       public function device(Request $request){

          $device =  User::where([['userable_id',$request->agent_id],['role_id',env('AGENT')]])->update(['mac_id'=>null]);

             $out=[];
          if($device)
                 $out = [ 'device'=>'unlocked'];
          return response()->json([
               'status' => 'success',
               'data' =>$out
           ]);


    }

    function agentRevpoint($agent){

        $agts = Agent::find($agent)->revenue_point()->get();


          $data = [];
             $k=0;
          foreach( $agts as  $agt ){
              $data[$k]['id'] = $agt['id'];
              $data[$k]['name'] = $agt['name'];
              $k++;

          }


        return response()->json([
            'status' => 'success',
            'data' =>$data
        ]);

    }




}
