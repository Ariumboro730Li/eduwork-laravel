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
        $members = member::with('users')->get();

        //return $members;
        return view ('admin.member.index', compact('members'));
    }

    public function api()
    {
        $members = member::all();

        //foreach ($members as $key => $member) {
        //    $member->date = convert_date($member->created_at);
        //}

        //$datatables = datatables()->of($members)->addIndexColumn();
        $datatables = DataTables::of($members)
                                ->addColumn('date', function($members) {
                                    return $members->created_at->format("H:i:s d F Y");                      
                                 })->addIndexColumn();

        return $datatables->make(true);
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
            'name'      => ['required'],
            'gender'      => ['required'],
            'phone_number'      => ['required'],
            'email'      => ['required'],
            'address'      => ['required'],
        ]);

        //$member = new member;
        //$member->name = $request->name;
        //$member->save();

        member::create($request->all());

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
        return view('admin.member', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('admin.member', compact('member'));
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
            'name'      => ['required'],
            'gender'      => ['required'],
            'phone_number'      => ['required'],
            'email'      => ['required'],
            'address'      => ['required'],
        ]);

        $member->update($request->all());

        return redirect('members');
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

        return redirect('members');
    }
}
