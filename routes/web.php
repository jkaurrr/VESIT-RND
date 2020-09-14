<?php

use Illuminate\Support\Facades\Input;
use App\User;
use App\Patent;
use App\Project;
use App\Domain;
use App\Achievement;
use Illuminate\Http\Request;

// Route::get('/', 'PagesController@index');
Route::get('/about', function()
{
    return view('about');
});
Route::get('/contact', [
    'uses'=>'ContactMessageController@create'
]);
Route::post('/contact', [
    'uses'=>'ContactMessageController@store',
    'as' => 'contact.store'
]);
Route::resource('publications','PublicationController');
Route::resource('research','ResearchGrantController');
Route::resource('projects','ProjectsController');
Route::resource('users','UserController');

Route::get('/individual_project', function()
{
    return view('projects.individual_project');
});

Route::get('/allDomains', function()
{
    $domains = Domain::all();
    
    return view('allDomains')->with('domains',$domains);
});

Route::get('/motto', 'PagesController@motto');
Route::get('/message', 'PagesController@message');
Route::get('/', function () {
    $domains = Domain::all();
    $data = array('domains'=>$domains);
    $accomplishments = Achievement:: all();
    return view('jay_home')->with($data)-> with(['accomplishments'=>$accomplishments]);
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/this_is_special_url_for_admin', 'PagesController@showNavbar');

Route::post('/addUser','UserController@store');
Route::post('/addDomain','DomainsController@store');
Route::post('/addPatent','PatentsController@store');
Route::post('/addCompany','CompanyController@store');
Route::post('/addPublication','PublicationController@store');
Route::post('/addResearchGrant','ResearchGrantController@store');
Route::post('/search',function()
{
    $q = Input::get('q');
    
    if(!empty($q))
    {   
        $users = User::where('name','LIKE','%'.$q.'%')
                        ->orWhere('designation','LIKE','%'.$q.'%')
                        ->orWhere('qualification','LIKE','%'.$q.'%')
                        ->orWhere('area_of_specialization','LIKE','%'.$q.'%')
                        ->orWhere('email','LIKE','%'.$q.'%')
                        ->get();

        $patents = Patent::where('title','LIKE','%'.$q.'%')
                ->orWhere('app_no','LIKE','%'.$q.'%')
                ->get();

        $projects = DB::table('project_table')->where('title','LIKE','%'.$q.'%')
        ->orWhere('type','LIKE','%'.$q.'%')
        ->orWhere('status','LIKE','%'.$q.'%')
        ->orWhere('description','LIKE','%'.$q.'%')
        ->get();
        
        $data = array('users'=>$users,'patents'=>$patents,'projects'=>$projects);
     
        if(!empty($users) || !empty($patents) || !empty($projects))
        {
            return view('search')->with($data);
        }
        else
        {
            return redirect('/jay_home')->with('error','Serach not found');
        }
    }
}
);

Route::get('/profile_list',function(){

    $users = User::all();
    return view('profile_list')->with('users',$users);
});

Route::get('/faq', function()
{
    return view('faq');
});

Route::post('/projects/index','ProjectsController@index');
// Route::post('/projects/index','ProjectsController@getData')->name('project.domain');
//  Route::post('/projects/index',function(Request $request){
//      $ids = $request->input('selected');
//  });
// Route::get('/index.php',function()
// {
//      return view('filter');
// });

Route::get('/profile', function()
{
    return view('profile');
});

Route::get('/login_only_for_admin',function()
{
    return view('auth.login');

});

// Route::get('/editUser/{id}', function($id)
// {
//     $user = User::find($id);
//     return view('editUser')->with('user',$user);
// });

Route::get('/patents',function()
{
    $patents = Patent::all();

    return view('allPatents')->with('patents',$patents);
});

Route::get('/individual_patent/{id}', function($id)
{
    $patent = Patent::find($id);
    $domains = DB::table('domain_patents')->where('patent_id',$id)->get();
    $users = DB::table('patent_users')->where('patent_id',$id)->get();
   
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
   $data = array('patent'=>$patent, 'domain_names'=> $domain_names, 'user_names'=>$user_names);

    return view('individual_patent')->with($data);
});

Route::get('/editPatent/{id}',function($id)
{
    $patent = Patent::find($id);

    return view('editPatent')->with('patent',$patent);
});

Route::post('/edit_this_patent', function(Request $request)
{
    $patent_id = $request['patent_id'];
    $patent = Patent::find($patent_id);
    $patent->title = $request['title'];
    $patent->app_no = $request['app_no'];

    $patent->save();

    return redirect('/patents')->with('success','Patent Edited Successfully');
});