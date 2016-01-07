<?php

//use random\Models\Restaurant;
namespace random\Http\Controllers\rest;
use DB;
use Validator;
use Illuminate\Http\Request;
use Session;
use random\Http\Requests;
use random\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class restviewcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$state=DB::table('state')->select('id','name')->get();
        //$city=DB::table('city')->select('id','name')->get();
        //$locality=DB::table('locality')->select('id','name')->get();
        $restaurant=DB::table('restaurant')->select('name')->orderBy('id','desc')->first();

        return view('rest_view')->with('restaurant',$restaurant);
        
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
        $rest=DB::table('restaurant')->orderBy('id','desc')->first();
        $restaurant_id=$rest->id;
        $name=$rest->name;
        $address=$rest->address;
        $pincode=$rest->pincode;
        $landmark=$rest->landmark;
        $locality_id=$rest->locality_id;
        $city_id=$rest->city_id;
        $state_id=$rest->state_id;

//$restaurant_id=$request->input('restaurant_id');
//$name=$request->input('name');
$short_description=$request->input('short_description');
$long_description=$request->input('long_description');
$cuisines=$request->input('cuisines');
$profile_photo=$request->file('profile_photo');
$avg_rating=$request->input('avg_rating');
$review_count=$request->input('review_count');
$max_package_price=$request->input('max_package_price');
$min_package_price=$request->input('min_package_price');
$min_order_value=$request->input('min_order_value');
$min_order_count=$request->input('min_order_count');
$total_orders=$request->input('total_orders');
$order_before=$request->input('order_before');
$cancel_before=$request->input('cancel_before');
//$address=$request->input('address');
//$pincode=$request->input('pincode');
//$landmark=$request->input('landmark');
//$locality_id=$request->input('locality_id');
//$city_id=$request->input('city_id');
//$state_id=$request->input('state_id');
    

        

        $rules=[
             
             //'restaurant_id'=>'required|exists:restaurant,id',
            // 'locality_id'=>'required|exists:locality,id',
            // 'city_id'=>'required|exists:city,id',
            // 'state_id'=>'required|exists:state,id',
             'cuisines'=>'required',
             //'name'=>'required',
             'short_description'=>'required',
             'long_description'=>'required',
             'avg_rating'=>'numeric',
             'review_count'=>'numeric',
             'max_package_price'=>'required|numeric',
             'min_package_price'=>'required|numeric',
             'min_order_value'=>'required|numeric',
             'min_order_count'=>'required|numeric',
             'total_orders'=>'numeric',
             'order_before'=>'required',
             'cancel_before'=>'required',
             //'address'=>'required',
             //'pincode'=>'required|numeric',



        ];
        $messages=[
        //'restaurant_id.required'=>'Enter Restaurant',
        //'locality_id.required'=>'Enter locality',
        //'city_id.required'=>'Enter a city',
        //'state_id.required'=>'Enter a state',
        'cuisines.required'=>'Place cuisine type',
        //'name.required'=>'Enter a name of the item',
        'short_description.required'=>'Describe',
        'avg_rating.numeric'=>'Enter in numeric',
        'review_count.numeric'=>'Enter in numeric',
        'max_package_price.required'=>'Enter maximum package price',
        'min_package_price.required'=>'Enter minimum package price',
        'min_order_value.required'=>'Enter minimum order value',
        'min_order_count.numeric'=>'Enter in numerics',
        'total_orders.numeric'=>'Enter in numerics',
        'order_before.required'=>'Give order before time',
        'cancel_before.required'=>'Give cancel before time',
        'max_package_price.numeric'=>'Enter in numerics',
        'min_package_price.numeric'=>'Enter in numerics',
        'min_order_value.numeric'=>'Enter in numerics'
        //'address.required'=>'require',
        //'pincode.required'=>'require'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect('restview')->withErrors($validator,'errors')->withInput($request->all());
        }
        else
     {

     DB::table('restaurant_view')->insert([

        'restaurant_id'=>$restaurant_id,
        'name'=>$name,
        'short_description'=>$short_description,
        'long_description'=>$long_description,
        'cuisines'=>$cuisines,
        'profile_photo'=>$profile_photo,
        'avg_rating'=>$avg_rating,
        'review_count'=>$review_count,
        'max_package_price'=>$max_package_price,
        'min_package_price'=>$min_package_price,
        'min_order_value'=>$min_order_value,
        'min_order_count'=>$min_order_count,
        'total_orders'=>$total_orders,
        'order_before'=>$order_before,
        'cancel_before'=>$cancel_before,
        'address'=>$address,
        'pincode'=>$pincode,
        'landmark'=>$landmark,
        'locality_id'=>$locality_id,
        'city_id'=>$city_id,
        'state_id'=>$state_id
    





        ]);
     Session::flash('message','View form is done!! please describe its menu');
     return redirect('menu');
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
    public function update(Request $request,$id)
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
