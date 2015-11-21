<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return View('members/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = new Member;
        $data = array();
        $data['member'] = $member;
        return View('members/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set the member data
        $member = new Member;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->address_1 = $request->address_1;
        $member->address_2 = $request->address_2;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->zip = $request->zip;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->member_type = $request->member_type;

        //create the member in the db
        if(!$member->save()){
            $errors = $member->getErrors();
            return redirect()
                ->action('MemberController@create')
                ->with('errors',$errors)
                ->withInput();
        }

        //success
        return redirect()
            ->action('MemberController@create')
            ->with('message',
                '<div class="alert alert-success">Member added successfully</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();
        $data['member'] = Member::find($id);
        return View('members/show',$data);
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
