<?php

namespace random\Http\Controllers\rest;
use DB;
use Validator;
use Illuminate\Http\Request;
use Session;
use random\Http\Requests;
use random\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class restimagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant=DB::table('restaurant')->select('name')->orderBy('id','desc')->first();
        return view('restaurant_images')->with('rest',$restaurant);
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
        $rest=DB::table('restaurant')->select('id')->orderBy('id','desc')->first();
        $restaurant_id=$rest->id;

        

        //$restaurant_id=$request->input('restaurant_id');
        $title=$request->input('title');

        $description=$request->input('description');
        $photo_address=$request->file('photo_address');
        if ($request->hasfile($photo_address))
        {
        var_dump($photo_address);
        $destination_path= public_path().'/images' ;
        //var_dump($destination_path);
        $filename=str_random(6).'.'.$photo_address->getClientOriginalName();
        $photo_address->move($destination_path,$filename);
        } 

        $rules=[
        //'restaurant_id'=>'required|exists:restaurant,id',
        'title'=>'required',
        'description'=>'required',
        'photo_address'=>'required|image'
        ];
  
        
        
        $messages=[
        //'restaurant_id.required'=>'Enter a restaurant',
        'title.required'=>'Enter a Title',
        'description.required'=>'Describe',
        //'photo_address.required'=>'Upload '
        'photo_address.image'=>'file should be an image'
        ]; 

        $validator=Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect('restimage')->withErrors($validator,'errors')->withInput($request->all());
        }
        else
        {

            DB::table('restaurant_images')->insert([
                'restaurant_id'=>$restaurant_id,
                'title'=>$title,
                'description'=>$description,
                'photo_address'=>$destination_path.$filename
                ]);

            Session::flash('message','image is stored');
            return redirect('restschedule');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
