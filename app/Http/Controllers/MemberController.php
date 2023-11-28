<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend/home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //$data = DB::table('members')->get();
        //return $data;
        $request->validate([
            'user_id'=>'required|unique:members,user',
            'password'=>'required|confirmed|min:6',
            'password_confirmation'=>'required_with:password|same:password|min:6',
            //'refer_id'=>'required|exists:members,user'
        ],[
            'password.required'=>'Password in Empty'
        ]);

        $pass = md5($request->password);
        $log_user = rand(9999,1000);
        // Member::insertId([]);
        $model = new Member;
        $model->sponsor = $request->refer_id;
        $model->user = $request->user_id;
        $model->log_user = $log_user;
        $model->password = $pass;
        $model->pin = '123456';
        $model->position='1';
        $model->upline=$request->refer_id;
        $model->pack='0';
        $model->point='0';
        $model->direct='0';
        $model->matching='0';
        $model->active = 1;
        $model->save();
        $profile = new Profile;
        $profile->name = $request->funllname;
        $profile->email = $request->email;
        $profile->save();
        $balance = new Balance;
        $balance->save();
        $msg = "Member Inserted";
        $request->session()->flash('message',$msg);
        return redirect('index');
        //$data = Member::all();
       // echo "<pre>";
        //print_r($data->toArray());
        //return Member::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $msg = "Member Inserted";
        $request->session()->flash('message',$msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
