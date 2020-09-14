<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patent;
use App\Project;
use App\Achievements;
use App\patent_users;
use App\publication_users;
use App\project_users;
use App\Publication;
use DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('profile_list')->with('users',$users);
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
            'image' => 'image|nullable|max:1999'
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
        $user = new User;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role = $request['role'];
        $user->cover_image = $fileNameToStore;
        $user->qualification = $request['qualification'];
        $user->designation = $request['designation'];
        $user->department = $request['department'];
        $user->area_of_specialization = $request['area_of_specialization'];

        $user->password = Hash::make($request['password']);
        
        $user->save();

        $newAchievement = new Achievement;

        $newAchievement->user_id = $user->id;
        $newAchievement->achievement = $request['achievement'];
        $newAchievement->save();
        return redirect('/this_is_special_url_for_admin')->with('success','User Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        $patents = DB::table('patent_users')->where('user_id',$id)->get();
        $publications = DB::table('publication_users')->where('user_id',$id)->get();
        $projects = DB::table('project_users')->where('user_id',$id)->get();
        $achievements = DB::table('achievements')->where('user_id',$id)->get();
        $patent_names = [];
        $publication_names = [];
        $project_names = [];
        $achievements_list = [];
        foreach($patents as $patent)
        {
            $id = $patent->patent_id;
            array_push($patent_names, Patent::find($id)->title);
        } 

        foreach($publications as $publication)
        {
            $id = $publication->publication_id;
            array_push($publication_names, Publication::find($id)->paper_title);
        }

        foreach($projects as $project)
        {
            $id = $project->project_id;
            array_push($project_names, Project::find($id)->project_title);
        }

        foreach($achievements as $achievementt)
        {
            $id = $achievementt->user_id;
            array_push($achievements_list, $achievementt->achievement);
        }

        $data = array('user'=>$user, 'patent_names'=> $patent_names, 'publication_names'=>$publication_names,'project_names'=>$project_names,'achievements_list'=>$achievements_list);
        return view('profile')->with($data);
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
        $user = User::find($id);

        $this->validate($request, [
            'image' => 'image|nullable|max:1999'
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

        $user->email = $request['email'];
        $user->cover_image = $fileNameToStore;
        $user->qualification = $request['qualification'];
        $user->designation = $request['designation'];
        $user->department = $request['department'];

        $user->save();

        $newAchievement = new Achievement;

        $newAchievement->user_id = $user->id;
        $newAchievement->achievement = $request['achievement'];
        $newAchievement->save();
        return redirect('/profile_list')->with('success','User Details Updated Successfully');


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
