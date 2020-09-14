<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patent;
use App\User;
use App\Domain;
use DB;

class PatentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'cover_image' => 'image|nullable|max:1999'
        ]);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $patent = new Patent;
        $patent->title = $request['title'];
        $patent->abstract = $request['abstract'];
        $patent->app_no = $request['app_no'];
        $patent->link = $request['link'];
        $patent->status = $request['status'];
        $patent->date = $request['date'];
        $inventors = $request['inventors'];
        $domains = $request['domains'];
        // $inventors = implode(',',$inventors);
        
        $patent->save();

        foreach($inventors as $i)
        {
            $user_id = User::where('name',$i)->get();
            $user_id = $user_id[0]->id;

            $values = array('user_id'=>$user_id, 'patent_id' => $patent->id);
            DB::table('patent_users')->insert($values);
            
        }

        foreach($domains as $i)
        {
            $domain_id = Domain::where('name',$i)->get();
            $domain_id = $domain_id[0]->id;
            
            $values = array('domain_id'=>$domain_id, 'patent_id' => $patent->id);
            DB::table('domain_patents')->insert($values);
            
        }
        
        return redirect('/this_is_special_url_for_admin')->with('success','Patent Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $patent = Patent::find($request['patent_id']);
        $patent->title = $request['title'];
        $patent->app_no = $request['app_no'];
        $patent->save();

        return redirect('/patents')->with('success','Patent Edited Successfully');
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

    public function show(Request $request)
    {
        $sort = $request['sort'];
       print_r($sort);
        
         if($sort == 0)
        {
            print_r($sort);     
            $patents = Patent::orderBy('created_at', 'ASC') ->get();
            
            return view('allPatents')->with('patents',$patents); 
        }
        
         if($sort == 2)
        {
            print_r($sort);
            $patents = Patent:: where('status' , '=' , '1') ->get();

            return view('allPatents')->with('patents',$patents); 
        }

        if($sort == 3)
        {
            print_r($sort);
            $patents = Patent:: where('status' , '=' , '0') ->get();
             return view('allPatents')->with('patents',$patents); 
        }

    }
}

