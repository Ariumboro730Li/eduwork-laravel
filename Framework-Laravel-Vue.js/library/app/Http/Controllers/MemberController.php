<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->gender) {
        //     $members = Member::where('gender', $request->gender)->get();
        // } else {
        //     $members = Member::all();
        // }

        // $datatables = datatables()->of($members)->addIndexColumn();

        // return $datatables->make(true);
         $members = Member::all();

         return view('admin.member.index')->with("members", $members);
        //return view('admin.member.index');
    }
    public function api() 
    {
        $members = Member::all();

        // foreach ($members as $key => $member) {
        //     $member->date = convert_date($member->created_at);
        // }

        $datatables = datatables()->of($members)
                                ->addColumn('date', function($member) {
                                    return convert_date($member->created_at);
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
        $this->validate($request,[
            'name'          =>['required'],
            'gender'        =>['required'],
            'phone_number'  =>['required'],
            'address'       =>['required'],
            'email'         =>['required'],                       
        ]);
        
        Member::create($request->all());
        
        return redirect('members');
        
        //return $request;
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
        //
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
            'name'          =>['required'],
            'gender'        =>['required'],
            'phone_number'  =>['required'],
            'address'       =>['required'],
            'email'         =>['required'], 
        ]);
        
        $author->update($request->all());
        
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
        // Delete data with specific ID
        $member->delete();

        return redirect('members')->with('success', 'Member data has been Deleted');
    }
}
