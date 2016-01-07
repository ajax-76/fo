<?php

namespace random\Http\Controllers\rest;
use DB;
use Validator;
use Illuminate\Http\Request;
use Session;
use random\Http\Requests;
use random\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
class menuitemoptionlistcontroller extends Controller
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
        $menuitem=DB::table('menu_item')->select('name')->orderBy('id','desc')->first();
        $menuitemoption=DB::table('menu_item_option_category')->select('name')->orderBy('id','desc')->first();
        return view('menu_item_option_list')->with('menu',$menu)->with('rest',$rest)->with('menuitem',$menuitem)->with('menuitemoption',$menuitemoption);
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
        $menu_item_option = DB::table('menu_item_option_category')->select('id')->orderBy('id','desc')->first();
       
            $menu_item_option_id=$menu_item_option->id;
        //$menu_item_option_id=$request->input('menu_item_option_id');
        $name=$request->input('name');
        $price=$request->input('price');

        $rules=[
          //'menu_item_option_id'=>'required|exists:menu_item_option,id',
          'name'=>'required',
          'price'=>'required|numeric'

        ];
        $messages=[
        //'menu_item_option_id.required'=>'Enter an item',
        'name.required'=>'enter name',
        'price.required'=>'price it !!',
        'price.numeric'=>'Enter in numeric'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect('menuitemoptionlist')->withErrors($validator,'errors')->withInput($request->all());
        }
        else
        {
            DB::table('menu_item_option_list_category')->insert([
                'menu_item_option_category_id'=>$menu_item_option_id,
                'name'=>$name,
                'price'=>$price
                ]);
           Session::flash('message','option list is stored fill more options in menu');
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
