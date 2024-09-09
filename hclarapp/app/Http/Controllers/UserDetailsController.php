<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ##$passports=\App\Passport::all();
        ##return view('index',compact('passports'));
        $userdetails=\App\Userdetail::all();
        return view('index',compact('userdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userdetail = new \App\Userdetail;
        $userdetail->firstname=$request->get('firstname');
        $userdetail->lastname=$request->get('lastname');
        $userdetail->email=$request->get('email');
        $userdetail->phonenumber=$request->get('phonenumber');
        $userdetail->nhsnumber=$request->get('nhsnumber');
        $userdetail->address=$request->get('address');
        $date=date_create($request->get('dob'));
        $format = date_format($date,"Y-m-d");
        $userdetail->date = strtotime($format);
        $userdetail->gender=$request->get('gender');
        $userdetail->save();

        return redirect('userdetails')->with('success', 'Information has been added');
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
        $userdetail = \App\Userdetail::find($id);
        return view('edit',compact('userdetail','id'));
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
        $userdetail = \App\Userdetail::find($id);
        $userdetail->firstname=$request->get('firstname');
        $userdetail->lastname=$request->get('lastname');
        $userdetail->email=$request->get('email');
        $userdetail->phonenumber=$request->get('phonenumber');
        $userdetail->nhsnumber=$request->get('nhsnumber');
        $userdetail->address=$request->get('address');
        #$userdetail->date=$request->get('dob');
        #$date=date_create($request->get('dob'));
        #$format = date_format($date,"Y-m-d");
        #$userdetail->date = strtotime($format);
        $userdetail->gender=$request->get('gender');
        $userdetail->save();

        return redirect('userdetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userdetail = \App\Userdetail::find($id);
        $userdetail->delete();

        return redirect('userdetails')->with('success','Information has been  deleted');
    }
}
