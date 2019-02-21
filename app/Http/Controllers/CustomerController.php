<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=customers::all();

        return view('customer/new_customer',compact('customer'));
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
        
        $this ->validate($request, [
        'name'=>'required',
        'email'=>'required',
        'dob'=>'required',
        'no_id'=>'required',
        'gender'=>'required',
        'phone'=>'required',
        'location'=>'required',
    ]);
        $customer = new customers;
        $customer->name=$request->get('name');
        $customer->email=$request->get('email');
        $customer->dob=$request->get('dob');
        $customer->no_id=$request->get('no_id');
        $customer->gender=$request->get('gender');
        $customer->phone=$request->get('phone');
        $customer->location=$request->get('location');
        $customer->save();
        Session::flash('message', 'Customer Registered Succesfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
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
