<?php

namespace App\Http\Controllers;

//use Request;
use App\Project;
use App\User;
use App\Domain;
use App\Company; 
use DB;
use Response;
use Illuminate\Http\Request;
//use Illuminate\Http\Response\JSON;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProjectsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index(Request $request)
    {
        
        //$checkdomain = $request->get('selected');
        if($request->ajax()){
            $projects =collect();
            // $checkdomain=Request::input('selected.0.name');
            // dd($checkdomain);
            // $cd=JSON.stringyfy(Request::input('selected'));
            // $projectsid=DB::table('domain_projects')->where('id',$cd)->get();
            // $projectsfilter=DB::table('projects')->where('id',$projectsid)->get();
            // dd($projectsfilter);
           // $idd=[];
            $idd=collect($request->input('selected'));
           // return dd($idd->isEmpty());
            //return dd($idd);
            // $domain=DB::select("select * from domain_projects ");
            // $d=$domain->implode('where domain_id ');
            //return dd($idd);
            if($idd->isNotEmpty())
            {
            $domain=collect();
            foreach($idd as $idd)
            {
               // $d=DB::table('domain_projects')->where('domain_id',$idd)->get();
               $c=count(DB::table('domain_projects')->select('project_id')->where('domain_id',$idd)->get());
                    $d=collect(DB::table('domain_projects')->select('project_id')->where('domain_id',$idd)->pluck('project_id'));
                    //$dd=$d->chunk($c)->toArray();

                    $domain->push($d->toArray());
                    
            }
           $dd=collect($domain->selfIntersect());
            // $domain->all();
            // return dd($dd); 
                //array_push($domain ,DB::table('domain_projects')->where('domain_id',$idd)->get());
            // foreach($d as $d)
            //     //foreach($d as $dd)
            //         $projects=collect(DB::table('projects')->where('id',$d->project_id)->get());
            if($dd->isNotEmpty())
            {
                $projects=collect($dd->map(function($item) {
                    $item=DB::table('projects')->where('id',$item)->get()->toArray();                
               return $item;
              
            }));
            return Response::json($projects)->getContent();    
            }
            else
            {
                $projects=collect([[["title"=>"No matching items","description"=>""] ]]);
                return Response::json($projects);    
            }
                
            
        //   return dd($projects); 
            // $projects->selfIntersect();
            // $projects->all(); 
          
        }
        else
        {
            $projectsfilter=[];
            // $projectsfilter=DB::table('projects')->get();
            // $dd=collect($projectsfilter->map(function($p){
            //     return $p;
            // }));
            // return dd($dd);
            // // foreach($pid as $p)
            // //     array_push($projectsfilter,DB::table('projects')->where('id','=',$p->project_id)->get());
            //     return Response::json($projectsfilter)->getContent();     
              //$pro=collect([]);  
             $pid=DB::select("select id from projects ");
            foreach($pid as $p)
            {
                array_push($projectsfilter,DB::table('projects')->where('id','=',$p->id)->get());
                //$pro->push($projectsfilter);
            }
                
            //$projectsfilter=collect([[["title"=>"No matching items","description"=>""] ]]);
            return Response::json($projectsfilter)->getContent();    
        }
           // $html=view('/projects/index',compact('domain'))->render();
            //return $html;
           
           // return redirect()->action('ProjectsController@index')->with(['domains'=>$domains]);
            //return dd(Response::json(Request::input('selected'))->getContent());
            //$arr=Request::input('selected');
           // return Redirect::route('/projects/index',Response::json(Request::input('selected'))->getContent());
        }
    // $checkdomain = $request->getContent();
    // $checkdomain=Input::all();
        //var_dump($checkdomain);
        // foreach($checkdomain as $cd)
        // {
        //     array_push($filterprojects,DB::('domain_projects')->where('domain_id',$cd));
        //     $filterprojects->
        // }
        // $c= DB::table('domain_projects as dp1')
        // ->join('domain_projects as dp2','dp2.project_id','=','dp1.project_id')
        // ->where('dp1.domain_id', 1)
        // ->where('dp2.domain_id', 2)
        // ->get();
    //     $this->content::join('domain_projects as dp1','dp1.project_id','=','project_id')
    // ->join('domain_projects as dp2','dp2.project_id','=','project_id')
    // ->where('dp1.domain_id', 1)
    // ->where('dp2.domain_id', 2);
$projectsfilter=[];
// print_r(Request::input('selected'));
    $pid=DB::select("select id from projects ");
    foreach($pid as $p)
       array_push($projectsfilter,DB::table('projects')->where('id','=',$p->id)->get());
       
       
        $domainsAI = DB::table('domain_projects')->where('domain_id',1)->get();
        $domainsBC = DB::table('domain_projects')->where('domain_id',2)->get();
        $domainsCS = DB::table('domain_projects')->where('domain_id',3)->get();
        $domainsRobo = DB::table('domain_projects')->where('domain_id',4)->get();
        $domainsIOT = DB::table('domain_projects')->where('domain_id',5)->get();
        $domainsAlgo = DB::table('domain_projects')->where('domain_id',6)->get();
        // $funded = DB::table('funded_project_table')->paginate(12);
        // $projectsAI=DB::table('projects')->get();
        $projectsAI=[];
        $projectsBC=[];
        $projectsCS=[];
        $projectsRobo=[];
        $projectsIOT=[];
        $projectsAlgo=[];
        $domains=DB::table('domains')->get();
        



        foreach($domainsAI as $domainsAI)
            array_push($projectsAI,DB::table('projects')->where('id',$domainsAI->project_id)->get());
        foreach($domainsBC as $domainsBC)
            array_push($projectsBC,DB::table('projects')->where('id',$domainsBC->project_id)->get());
        foreach($domainsCS as $domainsCS)
            array_push($projectsCS,DB::table('projects')->where('id',$domainsCS->project_id)->get());
        foreach($domainsRobo as $domainsRobo)
            array_push($projectsRobo,DB::table('projects')->where('id',$domainsRobo->project_id)->get());
        foreach($domainsIOT as $domainsIOT)
            array_push($projectsIOT,DB::table('projects')->where('id',$domainsIOT->project_id)->get());
        foreach($domainsAlgo as $domainsAlgo)
            array_push($projectsAlgo,DB::table('projects')->where('id',$domainsAlgo->project_id)->get());
        return view('/projects/index')->with(['projectsAI'=>$projectsAI])->with(['projectsBC'=>$projectsBC])->with(['projectsCS'=>$projectsCS])->with(['projectsRobo'=>$projectsRobo])->with(['projectsIOT'=>$projectsIOT])->with(['projectsAlgo'=>$projectsAlgo])->with(['domains'=>$domains])->with(['projectsfilter'=>$projectsfilter]);
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
        $project = new Project;
        $project->title = $request['title'];
        $project->description = $request['description'];
        $project->status = $request['status'];
        $project->type = $request['type'];
        $domain = $request['domains'];
        $users = $request['users'];
        $project->save();
        if($project->type == 'Industrial')
        {
            $company = $request['companies'];
            foreach($company as $i)
            {
                $company_id = Company::where('name',$i)->get();
                $company_id = $company_id[0]->id;

                $values = array('company_id'=>$company_id, 'project_id' => $project->id);
                DB::table('company_projects')->insert($values);
            }
        }
        elseif($project->type == 'Funded')
        {
            $company = $request['companies'];
            $amount = $request['amount'];
            $values = array('amount'=>$amount, 'project_id' => $project->id);
            DB::table('funded_projects')->insert($values);
            $funded_id=DB::table('funded_projects')->take(-1)->get();
            dd($funded_id);
            foreach($company as $i)
            {
                $company_id = Company::where('name',$i)->get();
                $company_id = $company_id[0]->id;
                $values = array('company_id'=>$company_id, 'funded_id' => $funded_id->id);
                DB::table('company_fundeds')->insert($values);
            }
        }

        foreach($users as $i)
        {
            $user_id = User::where('name',$i)->get();
            $user_id = $user_id[0]->id;

            $values = array('user_id'=>$user_id, 'project_id' => $project->id);
            DB::table('project_users')->insert($values);
        }

        foreach($domain as $i)
        {
            $domain_id = Domain::where('name',$i)->get();
            $domain_id = $domain_id[0]->id;
            
            $values = array('domain_id'=>$domain_id, 'project_id' => $project->id);
            DB::table('domain_projects')->insert($values);
        }
        
        return redirect('/this_is_special_url_for_admin')->with('success','Project Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
