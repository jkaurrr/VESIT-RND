<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patent;
use App\Domain;
use App\Company;

class PagesController extends Controller
{
    public function index(){
        //$user = patent::find(1)->users;
        //return $user;
        //$patent = user::find(1)->patents;
        //return $patent;
        return view('welcome');
    }
    public function about(){
        return view('pages.about');
    }
    public function motto(){
        return view('pages.motto');
    }
    public function message(){
        return view('pages.message');
    }

    public function showNavbar()
    {
        $users = User::all();
        $domains = Domain::all();
        $companies = Company::all();
        $data = array('users'=>$users,'domains'=>$domains, 'companies'=>$companies);
        
        return view('admin_page')->with($data);
    }
}
