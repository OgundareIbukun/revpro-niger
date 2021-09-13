<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use Illuminate\Support\Facades\Storage;
class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $training = Training::where('status',1)->get();

        return response()->json([
            'status' => 'success',
            'data' => $training
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
        //  dd($request);

        if ($request['type'] == 1){
            $request['data'] = json_decode($request['data'], true);
        //$validate = $request->validate([
        $validate = \Validator::make($request->all(), [
            'data.title' => 'required',
            'data.description' => 'required',
            'data.tag' => 'required',
            'file_name' => 'file|required|mimes:mp4,doc,docx,pdf,xslx,xsl|max:5000'

        ]);

    } else {

            $request['doc'] = json_decode($request['doc'], true);
            //$validate = $request->validate([
            $validate = \Validator::make($request->all(), [
                'doc.title' => 'required',
                'doc.description' => 'required',
                'doc.tag' => 'required',
                'file_name' => 'file|required|mimes:mp4,doc,docx,pdf,xslx,xsl|max:5000'

            ]);


        }


        if ($validate->fails()) {
            return response()->json(['message'=>'invalid data', 'errors'=>$validate->errors()], 422);
        }


            $file = $request->file('file_name');
              $mime = $file->getClientMimeType();
                // dd($mime);
            $path = 'uploads/'; // upload path
        if(strstr($mime, "video/")) {
            $filePath = $path . "video/";
            $type = 'video';
        }else if(strstr($mime, "application/pdf")){
            $filePath = $path."doc/";
            $type = 'pdf';
        }
        else{
            $filePath = $path."doc/";
            $type = 'doc';
        }

        //$filePath = $path."video/";

          if($request['type'] == 1)
        $training  = Training::create($request['data']);
         else
             $training  = Training::create($request['doc']);


                // $file->getClientOriginalName()
        $filename =  mt_rand(00000,999999).uniqid(time()).'.'.$file->getClientOriginalExtension();
       // $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            if($file->move($filePath, $filename)){

                //   $validate['file_name'] = $filename;
                $training->update([
                    'type'=>$type,
                    'file_name'=>$filename
                ]);

                return response()->json([
                    'status' => 'success',
                    'data' => $training
                ]);
            }
              else {

                  return response()->json([
                      'status' => 'error',
                      'data' => 'uploading error'
                  ],204);
              }









    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        //

        if($request['type'] == 1){
            $request['data'] = json_decode($request['data'],true);
            //$validate = $request->validate([
            $validate = \Validator::make($request->all(), [
                'data.title' => 'required',
                'data.description' => 'required',
                'data.tag' => 'required',
                'file_name' => 'sometimes'

            ]);

        }else {

            $request['doc'] = json_decode($request['doc'],true);
            //$validate = $request->validate([
            $validate = \Validator::make($request->all(), [
                'doc.title' => 'required',
                'doc.description' => 'required',
                'doc.tag' => 'required',
                'file_name' => 'sometimes'

            ]);

        }


        if ($validate->fails()) {
            return response()->json(['message'=>'invalid data', 'errors'=>$validate->errors()], 422);
        }


        if($request['type'] == 1)
        $training->update($request['data']);
        else
            $training->update($request['doc']);

        if (request()->hasFile('file_name') && trim(request()->file_name != '')) {
        $file = $request->file('file_name');
        $mime = $file->getClientMimeType();
        // dd($mime);
        $path = 'uploads/'; // upload path
            if(strstr($mime, "video/")) {
                $filePath = $path . "video/";
                $type = 'video';
            }else if(strstr($mime, "application/pdf")){
                $filePath = $path."doc/";
                $type = 'pdf';
            }
            else{
                $filePath = $path."doc/";
                $type = 'doc';
            }
       // $filename =  mt_rand(00000,999999).strtolower($file->getClientOriginalName());
            $filename =  mt_rand(00000,999999).uniqid(time()).'.'.$file->getClientOriginalExtension();
        // $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
        if($file->move($filePath, $filename)) {

            //   $validate['file_name'] = $filename;
            $training->update([
                'type' => $type,
                'file_name' => $filename
            ]);      //  = Training::create($validate['training']);


        }
         else {

             return response()->json([
                 'status' => 'error',
                 'data' =>'uploading error'
             ],422);

         }


        }


        return response()->json([
            'status' => 'success',
            'data' => $training
        ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
        // $file = $training->file_name;
       // unset('uploads/video/'.$file);
        $training->delete();
        return response()->json([], 204);
    }

    public function getVideos()
    {
        //

         $training = Training::where('type', 'video')->get();

           $data =[];
            $k=0;
         foreach($training as $trn){
                 $data[$k]['sn'] = $k+1;
             $data[$k]['id'] = $trn['id'];
             $data[$k]['title'] = $trn['title'];
             $data[$k]['description'] = $trn['description'];
             $data[$k]['tag'] = $trn['tag'];
             $data[$k]['title'] = $trn['title'];
             $data[$k]['file_name'] = 'uploads/video/'.$trn['file_name'];
             $data[$k]['status'] = $trn['status'];
              $k++;

            }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }


    public function getDocs()
    {
        //

        $training = Training::where('type', 'doc')->orWhere('type', 'pdf')->get();

        $data =[];
        $k=0;

        foreach($training as $trn){
            $data[$k]['sn'] = $k+1;
            $data[$k]['id'] = $trn['id'];
            $data[$k]['title'] = $trn['title'];
            $data[$k]['description'] = $trn['description'];
            $data[$k]['tag'] = $trn['tag'];
            $data[$k]['title'] = $trn['title'];
            $data[$k]['file_name'] = 'uploads/doc/'.$trn['file_name'];
            $data[$k]['status'] = $trn['status'];
            $k++;

        }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }

    // publish or unpiblic training contents
    public function updateStatus(Request $request){

        $trn = Training::where('id',request()->id)->first();
            $trn->update(['status'=>request()->status]);

            //  $data['status'] = $trn->status;
               $data = ['status'=>$trn->status];
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }



}
