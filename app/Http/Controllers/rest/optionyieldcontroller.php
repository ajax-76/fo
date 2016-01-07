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
class optionyieldcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu=DB::table('menu')->select('name')->orderBy('id','desc')->first();
        $rest=DB::table('restaurant')->select('name')->orderBy('id','desc')->first();
        return view('optionyield')->with('menu',$menu)->with('rest',$rest);
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
        $menu = DB::table('menu')->select('id')->orderBy('id','desc')->first();
       // $menu_id=(string)$menu;
       // foreach($menu as $x)
       // {
       
        
        $menu_id=$menu->id;
        

        $name=$request->input('name');
        $description=$request->input('description');
        $price=$request->input('price');
        $has_options=$request->input('has_options');

        $options=$request->input('options');


        for ($i=1;$i<=$options;$i++)
        {
            ${'name_options'.$i}=$request->input('name'.$i);
            ${'description_options'.$i}=$request->input('description'.$i);
            ${'max_choice_options'.$i}=$request->input('max_choice'.$i);
            ${'min_choice_options'.$i}=$request->input('min_choice'.$i);
            ${'paid_options'.$i}=$request->input('paid'.$i);
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
