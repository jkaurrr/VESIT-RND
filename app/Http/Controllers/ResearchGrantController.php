<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ResearchGrant;
use DB;

class ResearchGrantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research = ResearchGrant::all();
        return view('research.index')->with('research',$research);
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
        //
        $research = new ResearchGrant;
        $research->title = $request['title'];
        $research->description = $request['description'];
        $research->type = $request['type'];
        $user = $request['user'];
        $user_id = User::where('name',$user)->get();
        $user_id = $user_id[0]->id;
        $research->user_id = $user_id;
        $research->save();

        return redirect('/this_is_special_url_for_admin')->with('success','Research Grant Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $research = ResearchGrant::find($id);
        $user = DB::table('users')->where('id',$research->user_id)->get();

        $user_name = $user[0]->name;
        $data = array('research'=>$research, 'user_name'=>$user_name);
        return view('research.show')->with($data);
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
        $research = ResearchGrant::find($id);
        $research->title = $request['title'];
        $research->description = $request['description'];
        $research->type = $request['type'];

        $research->save();

        return redirect('/research')->with('success','Research Grant Updated Successfully');
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
