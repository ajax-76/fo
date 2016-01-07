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

class restcompanycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$rest=DB::table('restaurant_company')->select('id','name')->get();
        $state=DB::table('state')->select('id','name')->get();
        $city=DB::table('city')->select('id','name')->get();
        //$locality=DB::table('locality')->select('id','name')->get();

        return view('restaurant_company')->with('state_id',$state)->with('city_id',$city);
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


       $restaurant_company_name=$request->input('name');
      
       //$restaurant_company_id=$request->input('restaurant_company_id');
      
       $address=$request->input('address');
      
       //$locality_id=$request->input('locality_id');
      
       $city_id=$request->input('city_id');
      
       $pincode=$request->input('pincode');
      
       $state_id=$request->input('state_id');
      
       $landmark=$request->input('landmark');
    
       $phone_1=$request->input('phone_1');
      
       $phone_2=$request->input('phone_2');
      
       $email=$request->input('email');
      
       $contact_name=$request->input('contact_name');
      
       $contact_phone=$request->input('contact_phone');
      
       $contact_mobile=$request->input('contact_mobile');
      
       $contact_email=$request->input('contact_email');
      
       $contact_designation=$request->input('contact_designation');
      
       $cin=$request->input('cin');

             $rules=[

        //'restaurant_company_id'=>'required|exists:restaurant_company,id',
        'name'=>'required',
        'address'=>'required',
        //'locality_id'=>'required|exists:locality,id',
        'city_id'=>'required|numeric|exists:city,id',
        'state_id'=>'required|numeric|exists:state,id',
        //'billing_city_id'=>'required|exists:city,id',
        //'billing_state_id'=>'required|exists:state,id',
        'pincode'=>'required|numeric',
        'address'=>'required',
        'email'=>'required',
        'contact_name'=>'required',
        'contact_phone'=>'required|numeric',
        'contact_mobile'=>'required|numeric',
        'contact_email'=>'required',
        'contact_designation'=>'required',
        //'billing_contact_name'=>'required',
        //'billing_contact_phone'=>'required|numeric',
        //'billing_contact_mobile'=>'required|numeric',
        //'billing_contact_email'=>'required',
        //'billing_contact_designation'=>'required',
        //'billing_name'=>'required',
        //'billing_address'=>'required',
        //'billing_city_id'=>'required',
        //'billing_pincode'=>'required',
        //'billing_state_id'=>'required',
        //'service_tax'=>'required|numeric',
        //'vat'=>'required|numeric',
        //'vat_rate'=>'required|numeric',
        //'service_tax_rate'=>'required|numeric',
        //'service_charge_rate'=>'required|numeric',
        //'phone_1'=>'required|numeric',
        //'phone_2'=>'numeric',
        //'contact_2_phone'=>'numeric',
        //'contact_3_phone'=>'numeric',
        //'contact_2_mobile'=>'numeric',
        //'contact_3_mobile'=>'numeric',
        //'tin'=>'numeric',
        //'tan'=>'numeric',
        'cin'=>'required',
        'phone_1'=>'required|numeric',
        'phone_2'=>'numeric'






     ];
        $messages=[ 

        'restaurant_company_id.required'=>'Enter a valid company',
         //'locality_id.numeric'=>'Enter a locality',
         'city_id.numeric'=>'Enter a city',
         'state_id.numeric'=>'Enter a State',
         //'billing_city_id.required'=>'Enter billing address',
         //'billing_state_id.required'=>'Enter billing address',
         'pincode.required'=>'Enter pincode',
         'address.required'=>'Address is required',
         'email.required'=>'Email is required',
         'contact_name.required'=>'Enter the contact name',
         'contact_phone.required'=>'Enter the contact phone',
         'contact_mobile.required'=>'Enter the contact mobile',
         'contact_email.required'=>'Enter the contact email',
         'contact_designation.required'=>'Enter the contact designation',
         'name.required'=>'Enter restaurant name',
         //'address.required'=>'Enter a address',
         'contact_phone.numeric'=>'Enter in numeric',
         'contact_mobile.numeric'=>'Enter in numeric',
         'pincode.numeric'=>'Enter in numeric',
         'phone_1.required'=>'Enter a phone number',
         'phone_1.numeric'=>'Enter in numeric',
         'phone_2.numeric'=>'Enter in numeric',
         'cin.required'=>'Enter cin'

         ];



      $validator=Validator::make($request->all(),$rules,$messages);
      

      if ($validator->fails())
      {
        return redirect('restcomp')->withErrors($validator,'errors')->withInput($request->all());

      }

    else
  {

       DB::table('restaurant_company')->insert(

        [//'restaurant_company_id'=>$restaurant_company_id,

        'name'=>$restaurant_company_name,
      
       'address'=>$address,
      
       //'locality_id'=>$locality_id,
      
       'city_id'=>$city_id,
      
       'pincode'=>$pincode,
      
       'state_id'=>$state_id,
      
       'landmark'=>$landmark,
    
       'phone_1'=>$phone_1,
      
       'phone_2'=>$phone_2,
      
       'email'=>$email,
      
       'contact_name'=>$contact_name,
      
       'contact_phone'=>$contact_phone,
      
       'contact_mobile'=>$contact_mobile,
      
       'contact_email'=>$contact_email,
      
       'contact_designation'=>$contact_designation,
      
       'cin'=>$cin
       //'service_charge_rate'=>$service_charge_rate
       ]);
  Session::flash('message','Company is filled is ,  fill again for different company or move navbar to fill restaurants ');
  
  return redirect('rest');

        
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
