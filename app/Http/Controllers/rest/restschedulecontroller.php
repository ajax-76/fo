<?php
namespace random\Http\Controllers\rest;
use DB;
use Validator;
use Illuminate\Http\Request;
use Session;
use random\Http\Requests;
use random\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;


class restschedulecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant=DB::table('restaurant')->select('name')->orderBy('id','desc')->first();
        return view('restaurant_schedule')->with('rest',$restaurant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $day1=$request->input('day1');
        $open1=$request->input('open1');
        $open_time1=$request->input('open_time1');
        $close_time1=$request->input('close_time1');
        $day2=$request->input('day2');
        $open2=$request->input('open2');
        $open_time2=$request->input('open_time2');
        $close_time2=$request->input('close_time2');
        $day3=$request->input('day3');
        $open3=$request->input('open3');
        $open_time3=$request->input('open_time3');
        $close_time3=$request->input('close_time3');
        $day4=$request->input('day4');
        $open4=$request->input('open4');
        $open_time4=$request->input('open_time4');
        $close_time4=$request->input('close_time4');
        $day5=$request->input('day5');
        $open5=$request->input('open5');
        $open_time5=$request->input('open_time5');
        $close_time5=$request->input('close_time5');
        $day6=$request->input('day6');
        $open6=$request->input('open6');
        $open_time6=$request->input('open_time6');
        $close_time6=$request->input('close_time6');
        $day7=$request->input('day7');
        $open7=$request->input('open7');
        $open_time7=$request->input('open_time7');
        $close_time7=$request->input('close_time7');

        $rules=[
       
        //'restaurant_id'=>'required|exists:restaurant,id',
        'day1'=>'required',
        'day2'=>'required',
        'day3'=>'required',
        'day4'=>'required',
        'day5'=>'required',
        'day6'=>'required',
        'day7'=>'required',
        'open1'=>'required|boolean',
        'open2'=>'required|boolean',
        'open3'=>'required|boolean',
        'open4'=>'required|boolean',
        'open5'=>'required|boolean',
        'open6'=>'required|boolean',
        'open7'=>'required|boolean',
        'open_time1'=>'required',
        'open_time2'=>'required',
        'open_time3'=>'required',
        'open_time4'=>'required',
        'open_time5'=>'required',
        'open_time6'=>'required',
        'open_time7'=>'required',
        'close_time1'=>'required',
        'close_time2'=>'required',
        'close_time3'=>'required',
        'close_time4'=>'required',
        'close_time5'=>'required',
        'close_time6'=>'required',
        'close_time7'=>'required'
        ];
        /*$messages=[
        //'restaurant_id.required'=>'Enter a Restaurant',
        'days.required'=>'Enter a day',
        'open.required'=>'Is it open or close',
        'open_time.required'=>'state opening time',
        'close_time.required'=>'state closing time',
        //'open.boolean'=>'Enter either 1 or 0'
        ];*/

        $validator=Validator::make($request->all(),$rules);

        if ($validator->fails())
        {
            return redirect('restschedule')->withErrors($validator,'errors')->withInput($request->all());
        }
        else
        {
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day1,
                'open'=>$open1,
                'open_time'=>$open_time1,
                'close_time'=>$close_time1
                ]);
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day2,
                'open'=>$open2,
                'open_time'=>$open_time2,
                'close_time'=>$close_time2
                ]);
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day3,
                'open'=>$open3,
                'open_time'=>$open_time3,
                'close_time'=>$close_time3
                ]);
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day4,
                'open'=>$open4,
                'open_time'=>$open_time4,
                'close_time'=>$close_time4
                ]);
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day5,
                'open'=>$open5,
                'open_time'=>$open_time5,
                'close_time'=>$close_time5
                ]);
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day6,
                'open'=>$open6,
                'open_time'=>$open_time6,
                'close_time'=>$close_time6
                ]);
            DB::table('restaurant_schedule')->insert([
                'restaurant_id'=>$restaurant_id,
                'days'=>$day7,
                'open'=>$open7,
                'open_time'=>$open_time7,
                'close_time'=>$close_time7
                ]);
            //for ($i=0;$i<7;$i=$i+1)
            //{
            //return redirect('restschedule');
            Session::flash('message','schedule is set , continue');
            return redirect('restview');
        
        //return redirect('restschedule');
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
