<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::with('transaction')->get();

        //return $members;
        return view('admin.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'id_member'  =>['required'],
            'name'  =>['required'],
            'username'  =>['required'],
            'password'  =>['required'],
            'gender'  =>['required'],
            'phone_number'  =>['required'],
            'address'  =>['required'],
            'email'  =>['required'],
        ]);
        // $member = new member;
        // $member ->id_member =$request ->id_member;
        // $member ->name = $request ->name;
        // $member->save();

        Member::create('$request->all()');
        
        return redirect('members');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        
        return view('admin.member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $this->validate($request,[
            'id_member'  =>['required'],
            'name'  =>['required'],
            'username'  =>['required'],
            'password'  =>['required'],
            'gender'  =>['required'],
            'phone_number'  =>['required'],
            'address'  =>['required'],
            'email'  =>['required'],
        ]);

        $member->update( $request->all());
        
        return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        
        $member->delete();

        return redirect('member');
    }
}
