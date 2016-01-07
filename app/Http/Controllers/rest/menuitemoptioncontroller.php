<?php

namespace random\Http\Controllers\rest;
use DB;
use Validator;
use Illuminate\Http\Request;
use Session;
use random\Http\Requests;
use random\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class menuitemoptioncontroller extends Controller
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
        return view('menu_item_option')->with('rest',$rest)->with('menu',$menu)->with('menuitem',$menuitem);
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
        $menu_item = DB::table('menu_item')->select('id')->orderBy('id','desc')->first();
       
        $menu_item_id=$menu_item->id;
        //$menu_item_id=$request->input('menu_item_id');
        $name=$request->input('name');
        $description=$request->input('description');
        $max_choice=$request->input('max_choice');
        $min_choice=$request->input('min_choice');
        $paid=$request->input('paid');

        $rules=[
        //'menu_item_id'=>'required|exists:menu_item,id',
        'name'=>'required',
        'description'=>'required',
        'max_choice'=>'required|numeric',
        'min_choice'=>'required|numeric',
        'paid'=>'required|boolean'

        ];
        $messages=[
        //'menu_item_id.required'=>'item is required',
        'name.required'=>'Enter a name!',
        'description.required'=>'describe',
        'max_choice.required'=>'Enter a value',
        'min_choice.required'=>'Enter a value',
        'max_choice.numeric'=>'Enter in numeric',
        'min_choice.numeric'=>'Enter in numeric',
        'paid.boolean'=>'Enter the field'
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect('menuitemoption')->withErrors($validator,'errors')->withInput($request->all());
        }

        else
        {
            DB::table('menu_item_option_category')->insert([
                'menu_item_id'=>$menu_item_id,
                'name'=>$name,
                'description'=>$description,
                'max_choice'=>$max_choice,
                'min_choice'=>$min_choice,
                'paid'=>$paid
                ]);
            Session::flash('message','item option is stored!! any more customization??');
            return redirect('menuitemoptionlist');
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
