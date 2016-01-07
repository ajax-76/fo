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

class restcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $rest=DB::table('restaurant_company')->select('id','name')->get();
        $state=DB::table('state')->select('id','name')->get();
        $city=DB::table('city')->select('id','name')->get();
        $locality=DB::table('locality')->select('id','name')->get();

        return view('rest')->with('restaurant_company_id',$rest)->with('state_id',$state)->with('city_id',$city)->with('locality_id',$locality);
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


       $restaurant_name=$request->input('name');
      
       $restaurant_company_id=$request->input('restaurant_company_id');
      
       $address=$request->input('address');
      
       $locality_id=$request->input('locality_id');
      
       $city_id=$request->input('city_id');
      
       $pincode=$request->input('pincode');
      
       $state_id=$request->input('state_id');
      
       $landmark=$request->input('landmark');
    
       $phone_1=$request->input('phone_1');
      
       $phone_2=$request->input('phone_2');
      
       $email=$request->input('email');
      
       $contact_1_name=$request->input('contact_1_name');
      
       $contact_1_phone=$request->input('contact_1_phone');
      
       $contact_1_mobile=$request->input('contact_1_mobile');
      
       $contact_1_email=$request->input('contact_1_email');
      
       $contact_1_designation=$request->input('contact_1_designation');
      
       $contact_2_name=$request->input('contact_2_name');
      
       $contact_2_phone=$request->input('contact_2_phone');
      
       $contact_2_mobile=$request->input('contact_2_mobile');
      
       $contact_2_email=$request->input('contact_2_email');
      
       $contact_2_designation=$request->input('contact_2_designation');
      
       $contact_3_name=$request->input('contact_3_name');
      
       $contact_3_phone=$request->input('contact_3_phone');

       $contact_3_mobile=$request->input('contact_3_mobile');
      
       $contact_3_email=$request->input('contact_3_email');
      
       $contact_3_designation=$request->input('contact_3_designation');

       $billing_contact_name=$request->input('billing_contact_name');
      
       $billing_contact_phone=$request->input('billing_contact_phone');
      
       
       $billing_contact_mobile=$request->input('billing_contact_mobile');
       
       $billing_contact_email=$request->input('billing_contact_email');
      
       $billing_contact_designation=$request->input('billing_contact_designation');
      
       $billing_name=$request->input('billing_name');
      
       $billing_address=$request->input('billing_address');
    
       $billing_city_id=$request->input('billing_city_id');
    
       $billing_pincode=$request->input('billing_pincode');
      
       $billing_state_id=$request->input('billing_state_id');
    
       $service_tax=$request->input('service_tax');
    
       $tin=$request->input('tin');

       $tan=$request->input('tan');
      
        $vat=$request->input('vat');
      
       $pan=$request->input('pan');
      
       $vat_rate=$request->input('vat_rate');
    
       $service_tax_rate=$request->input('service_tax_rate');
       $service_charge_rate=$request->input('service_charge_rate');


             $rules=[

        'restaurant_company_id'=>'required|exists:restaurant_company,id',
        'name'=>'required',
        //'address'=>'required',
        'locality_id'=>'required|numeric|exists:locality,id',
        'city_id'=>'required|numeric|exists:city,id',
        'state_id'=>'required|numeric|exists:state,id',
        'billing_city_id'=>'required|numeric|exists:city,id',
        'billing_state_id'=>'required|numeric|exists:state,id',
        'pincode'=>'required|numeric',
        'address'=>'required',
        'email'=>'required',
        'contact_1_name'=>'required',
        'contact_1_phone'=>'required|numeric',
        'contact_1_mobile'=>'required|numeric',
        'contact_1_email'=>'required',
        'contact_1_designation'=>'required',
        'billing_contact_name'=>'required',
        'billing_contact_phone'=>'required|numeric',
        'billing_contact_mobile'=>'required|numeric',
        'billing_contact_email'=>'required',
        'billing_contact_designation'=>'required',
        'billing_name'=>'required',
        'billing_address'=>'required',
        'billing_city_id'=>'required',
        'billing_pincode'=>'required',
        'billing_state_id'=>'required',
        'service_tax'=>'required',
        'vat'=>'required',
        'vat_rate'=>'required|numeric',
        'service_tax_rate'=>'required|numeric',
        'service_charge_rate'=>'required|numeric',
        'phone_1'=>'required|numeric',
        'phone_2'=>'numeric',
        'contact_2_phone'=>'numeric',
        'contact_3_phone'=>'numeric',
        'contact_2_mobile'=>'numeric',
        'contact_3_mobile'=>'numeric',
        //'tin'=>'numeric',
        //'tan'=>'numeric',
        //'pan'=>'numeric'






     ];
        $messages=[ 

        'restaurant_company_id.required'=>'Enter a valid company',
         'locality_id.numeric'=>'Enter a locality',
         'city_id.numeric'=>'Enter a city',
         'state_id.numeric'=>'Enter a State',
         'billing_city_id.numeric'=>'Enter billing address',
         'billing_state_id.numeric'=>'Enter billing address',
         'pincode.required'=>'Enter pincode',
         'address.required'=>'Address is required',
         'email.required'=>'Email is required',
         'contact_1_name.required'=>'Enter the contact name',
         'contact_1_phone.required'=>'Enter the contact phone',
         'contact_1_mobile.required'=>'Enter the contact mobile',
         'contact_1_email.required'=>'Enter the contact email',
         'contact_1_designation.required'=>'Enter the contact designation',
         'billing_contact_name.required'=>'Enter the billing name',
         'billing_contact_phone.required'=>'Enter the billing phone',
         'billing_contact_mobile.required'=>'Enter the billing mobile',
         'billing_contact_email.required'=>'Enter the billing email',
         'billing_contact_designation.required'=>'Enter the billing designation',
         'billing_name.required'=>'Enter the billing name',
         'billing_address.required'=>'Enter the billing address',
         'billing_city_id.required'=>'Enter the billing city',
         'billing_state_id.required'=>'Enter the billing state',
         'billing_pincode.required'=>'Enter the billing pincode',
         'name.required'=>'Enter restaurant name',
         //'address.required'=>'Enter a address',
         'contact_1_phone.numeric'=>'Enter in numeric',
         'contact_1_mobile.numeric'=>'Enter in numeric',
         'contact_2_phone.numeric'=>'Enter in numeric',
         'contact_2_mobile.numeric'=>'Enter in numeric',
         'contact_3_phone.numeric'=>'Enter in numeric',
         'contact_3_mobile.numeric'=>'Enter in numeric',
         'pincode.numeric'=>'Enter in numeric',
         'billing_contact_phone.numeric'=>'Enter in numeric',
         'billing_contact_mobile.numeric'=>'Enter in numeric',
         //'service_tax.numeric'=>'Enter in numeric',
         'service_tax_rate.numeric'=>'Enter in numeric',
         //'vat.numeric'=>'Enter in numeric',
         'vat_rate.numeric'=>'Enter in numeric',
         'service_charge_rate.numeric'=>'Enter in numeric',
         //'tin.numeric'=>'Enter in numeric',
         //'tan.numeric'=>'Enter in numeric',
         //'pan.numeric'=>'Enter in numeric',
         'phone_1.required'=>'Enter a phone number',
         'phone_1.numeric'=>'Enter in numeric',
         'phone_2.numeric'=>'Enter in numeric'

         ];



      $validator=Validator::make($request->all(),$rules,$messages);
      

      if ($validator->fails())
      {
        return redirect('rest')->withErrors($validator,'errors')->withInput($request->all());

      }

    else
  {

       DB::table('restaurant')->insert(

        ['restaurant_company_id'=>$restaurant_company_id,

        'name'=>$restaurant_name,
      
       'address'=>$address,
      
       'locality_id'=>$locality_id,
      
       'city_id'=>$city_id,
      
       'pincode'=>$pincode,
      
       'state_id'=>$state_id,
      
       'landmark'=>$landmark,
    
       'phone_1'=>$phone_1,
      
       'phone_2'=>$phone_2,
      
       'email'=>$email,
      
       'contact_1_name'=>$contact_1_name,
      
       'contact_1_phone'=>$contact_1_phone,
      
       'contact_1_mobile'=>$contact_1_mobile,
      
       'contact_1_email'=>$contact_1_email,
      
       'contact_1_designation'=>$contact_1_designation,
      
       'contact_2_name'=>$contact_2_name,
      
       'contact_2_phone'=>$contact_2_phone,
      
       'contact_2_mobile'=>$contact_2_mobile,
      
       'contact_2_email'=>$contact_2_email,
      
       'contact_2_designation'=>$contact_2_designation,
      
       'contact_3_name'=>$contact_3_name,
      
       'contact_3_phone'=>$contact_3_phone,

       'contact_3_mobile'=>$contact_3_mobile,
      
       'contact_3_email'=>$contact_3_email,
      
       'contact_3_designation'=>$contact_3_designation,

       'billing_contact_name'=>$billing_contact_name,
      
       'billing_contact_phone'=>$billing_contact_phone,
      
       'billing_contact_mobile'=>$billing_contact_mobile,
       
       'billing_contact_email'=>$billing_contact_email,
      
       'billing_contact_designation'=>$billing_contact_designation,
      
       'billing_name'=>$billing_name,
      
       'billing_address'=>$billing_address,
    
       'billing_city_id'=>$billing_city_id,
    
       'billing_pincode'=>$billing_pincode,
      
       'billing_state_id'=>$billing_state_id,
    
       'service_tax'=>$service_tax,
    
       'tin'=>$tin,

       'tan'=>$tan,
      
        'vat'=>$vat,
      
       'pan'=>$pan,
      
       'vat_rate'=>$vat_rate,
    
       'service_tax_rate'=>$service_tax_rate,
       'service_charge_rate'=>$service_charge_rate
       ]);
  Session::flash('message','Basic restaurant is filled');
  return redirect('restimage');

        
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
