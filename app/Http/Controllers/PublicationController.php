<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Domain;
use App\User;
use DB;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publication = Publication::  paginate(5);
        return view('publications.index')->with('publications',$publication);
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
        $publication = new Publication;
        $publication->link = $request['link'];
        $publication->paper_title=$request['paper_title'];
        $publication->abstract=$request['abstract'];
       
       
        $publication->year=$request['year'];
        $authors = $request['authors'];
        $domains = $request['domains'];
        $publication->save();

        foreach($authors as $i)
        {
            $user_id = User::where('name',$i)->get();
            $user_id = $user_id[0]->id;

            $values = array('user_id'=>$user_id, 'publication_id' => $publication->id);
            DB::table('publication_users')->insert($values);
            
        }

        foreach($domains as $i)
        {
            $domain_id = Domain::where('name',$i)->get();
            $domain_id = $domain_id[0]->id;
            
            $values = array('domain_id'=>$domain_id, 'publication_id' => $publication->id);
            DB::table('domain_publications')->insert($values);
            
        }

        return redirect('/this_is_special_url_for_admin')->with('success','Publication Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::find($id);
        $domains = DB::table('domain_publications')->where('publication_id',$id)->get();
        $users = DB::table('publication_users')->where('publication_id',$id)->get();
    
        $user_names = [];
        $domain_names = [];

        foreach($domains as $domain)
        {
            $id = $domain->domain_id;
            array_push($domain_names, Domain::find($id)->name);
        } 

        foreach($users as $user)
        {
            $id = $user->user_id;
            array_push($user_names, User::find($id)->name);
        } 
        //    return $user_names;
        $data = array('publication'=>$publication, 'domain_names'=> $domain_names, 'user_names'=>$user_names);

        return view('publications.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::find($id);
        return view('publications.edit')->with('publication',$publication);
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
        $publication = Publication::find($id);
        $publication->link = $request['link'];
        $publication->save();

        return redirect('/publications')->with('success','Publicated Updated Successfully');
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