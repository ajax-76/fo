<?php

namespace random\Http\Controllers\rest;
use DB;
use Validator;
use Illuminate\Http\Request;
use Session;
use random\Http\Requests;
use random\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;
//use Session;
//use random\Http\Requests\Request;

class menucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant=DB::table('restaurant')->select('name')->orderBy('id','desc')->first();
         return view('menu')->with('rest',$restaurant);
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
        $name=$request->input('name');
        $description=$request->input('description');
        $price=$request->input('price');
        $type=$request->input('type');

        $rules=[


        //'restaurant_id'=>'required|exists:restaurant,id',
        'name'=>'required',
        'description'=>'required',
        'price'=>'required|numeric',
        'type'=>'required'


        ];
        $messages=[
        //'restaurant_id.required'=>'select restaurant',
        'name.required'=>'name of item required',
        'description.required'=>'description is required',
        'price.required'=>'enter a price',
        //'type.numeric'=>'enter the type',
        'price.numeric'=>'Enter in numeric'
        
        ];
        
        $validator=Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect('menu')->withErrors($validator,'errors')->withInput($request->all());
        }
        else
        {
            DB::table('menu')->insert([
                'restaurant_id'=>$restaurant_id,
                'name'=>$name,
                'description'=>$description,
                'price'=>$price,
                'type'=>$type
                ]);
          
          
           //return response()->json($menu_id);
           //return redirect()->route('menuitem',$menu_id);
           //$request->session()->put('menu',$menu_id);
            //return view('menu_item')->with('menu_id',$menu_id);
            Session::flash('message','menu has been entered fill the item');
            return redirect('menuitem');
        
        

         
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
