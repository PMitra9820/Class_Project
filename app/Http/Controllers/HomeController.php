<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function home(){
    	return view('frontend.pages.home');
    }

    public function about(){
    	return view('frontend.pages.about');
    }

    public function service(){
    	return view('frontend.pages.service');
    }

    public function test(){
    	return view('backend.pages.dashboard');
    }

    public function addpost(){
    	return view('backend.pages.addpost');
    }
    public function savepost(Request $req){
        $obj = new User();
        $obj->title = $req->title;
        $obj->description = $req->description;
        if($obj->save())
        {
    //       return 'successfully saved';
     return view('backend.pages.addpost');

     
        } 
    }
        public function showpost(){
        //return view('backend.pages.addpost');
            $obj = User::all();
            return view('backend.pages.showpost', ['data'=>$obj]);
         
    }

}
