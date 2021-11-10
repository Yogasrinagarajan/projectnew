<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        // $view= DB::select('select * from adds where (delete_status = ?) AND (active_status=?)',[0,1]);

        // $view=Customer::all();
        $view=Customer::where('active_status',1)->where('delete_status',0)->get();
        return view('view',compact('view'));
         // return view('view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('addcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation code

          $request->validate([

            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'phno'=>'required'

          ]);


          // insert into table  

           $add =new Customer();
           $add->firstname=request('fname');
           $add->lastname=request('lname');
           $add->email=request('email');
           $add->phone=request('phno');
           $add->save();
           return redirect('customer/create')->with('message','Inserted Successfully');


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
         $data = Customer::find($id);
         return view('editcustomer',['data'=>$data]);

        // $editdata = DB::table('adds')->find($id);
        // return View('editcustomer',array('list' => $editdata));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $data=Customer::find($request->id);
        $data->firstname=$request->fname;
        $data->lastname=$request->lname;
        $data->email=$request->email;
        $data->phone=$request->phno;
        $data->save();
        return redirect('customer/'.$data->id.'/edit')->with('message','Updated Successfully');
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
         $data=Customer::find($id);
         // $data->delete();
         // DB::update('update adds set active_status=?,delete_status = ? where id = ?',[0,1,$id]);
         $data->active_status="0";
         $data->delete_status="1";
         $data->save();
         return redirect('customer');
    }
}
