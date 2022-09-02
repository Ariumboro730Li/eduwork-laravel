<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        //return $members;
        return view ('admin.member', compact('members'));
    }

    public function api()
    {
        $members = member::all();
        $datatables = datatables()->of($members)->addIndexColumn();

        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $//keamaanan this
        $this->validate($request,[
            'name' => ['required', 'min:3'],
			'phone_number' => ['required', 'min:10'],
			'email' => ['required', 'email', 'unique:members'],
			'address' => ['required'],
        ]);
        Member::create($request->all());

        return redirect ('members');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //return view('admin.member', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('admin.member.index', compact('member'));
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
         // Validation Data
         $validator = $request->validate([
            'name' => 'required|min:3|max:32',
            'gender' => 'required|max:1',
            'phone_number' => "required|unique:members,phone_number,{$member->id}|min:12|max:15",
            'address' => 'required',
			'email' => ['required', 'email', 'unique:members,email,'.$member->id]
        ]);

        // Insert validated data into database
        $member->update($request->all());

        return redirect('members')->with('success', 'Member data has been Updated');
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

        return redirect('members')->with('success', 'Member data has been Deleted');
    }
}
