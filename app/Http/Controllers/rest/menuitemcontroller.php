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

class menuitemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //$session_data=Session::get('menu_id');
                //return $session_data;
        $menu=DB::table('menu')->select('name')->orderBy('id','desc')->first();
        $rest=DB::table('restaurant')->select('name')->orderBy('id','desc')->first();
        return view('menu_item')->with('menu',$menu)->with('rest',$rest);
        
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
        



        $rules=[
        //'menu_id'=>'required|exists:menu,id',
        'name'=>'required',
        'description'=>'required',
        'price'=>'numeric',
        'has_options'=>'required|boolean'
        ];
        $messages=[
        //'menu_id.required'=>'enter an item',
        'name.required'=>'enter an item',
        'description.required'=>'describe',
        'price.numeric'=>'price it in numerics !!',
        'has_options.required'=>'field required',
        'has_options.boolean'=>'Enter 1 or 0'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect('menuitem')->withErrors($validator,'errors')->withInput($request->all());
        }
        else
        {   //var_dump($menu_id);
            DB::table('menu_item')->insert([
                'menu_id'=>$menu_id,
                 'name'=>$name,
                 'description'=>$description,
                 'price'=>$price,
                 'has_options'=>$has_options
                ]);
            
            if ($has_options==1){
                $menu_item = DB::table('menu_item')->select('id')->orderBy('id','desc')->first();
                $menu_item_id=$menu_item->id;
                 for ($i=1;$i<=$options;$i++)
                  { 
                    var_dump($request->input('name'.$i));
                   DB::table('menu_item_option_category')->insert([

                        'menu_item_id'=>$menu_item_id,
                        'name'=>${'name_options'.$i},
                        'description'=>${'description_options'.$i},
                        'max_choice'=>${'max_choice_options'.$i},
                        'min_choice'=>${'min_choice_options'.$i},
                        'paid'=>${'paid_options'.$i}
                        ]);
                   $menu_item_option = DB::table('menu_item_option_category')->select('id')->orderBy('id','desc')->first();
                   $menu_item_option_category_id=$menu_item_option->id;
                      
                      // for($j=1;$j<=$option;$j++)
                      // {
                      //   ${'nam'.$j}=$request->input('nam'.$j);
                      //   ${'pric'.$j}=$request->input('pric'.$j);
                      // }
                     $option=$request->input('option'.$i);
                      for ($k=1;$k<=$option;$k++)
                      {
                        DB::table('menu_item_option_list_category')->insert([
                            'menu_item_option_category_id'=>$menu_item_option_category_id,
                            'name'=>$request->input('nam'.'option'.$i.$k),
                            'price'=>$request->input('pric'.'option'.$i.$k)
                            ]);
                      }
            }

        
      
    } 
    Session::flash('f','fill more item or go to menu to fill more menu');
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
