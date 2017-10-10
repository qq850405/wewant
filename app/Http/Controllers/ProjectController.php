<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use \App\project;

class ProjectController extends Controller
{       
    
    //
    public function index(){


        if (!Auth::check()) {
            // 這個使用者未登入...
            return redirect('login');
        }else{

            return View::make('project.create');
        }
    }

    public function create(Request $request){
        
        if (!Auth::check()) {
            // 這個使用者未登入...
            return redirect('login');
        }else{

            //return View::make('project.proposal');
            $request->all();

            $projectName = $request->input('projectName');
            $type = $request->input('type');
            $check= $request->input('check');
            
            Session::put('projectName', $projectName);
            Session::put('type', $type);


            return View::make('project.proposal');

        
        
        }

    }

    public function store(Request $request){
        if(!Auth::check()){

            return redirect('login');
        }else{
            
            $projectName=(string)Session::get('projectName');
            $type=(string)Session::get('type');
            $title=$request->input('project-title');
            $introduction=$request->input('intro');
            $content=$request->input('content');
            $goals=$request->input('goals');
            $begin_time=$request->input('begin-date');
            $end_time=$request->input('duration');
            $owner=$request->input('owner');
            $phone=$request->input('phone');
            $identity=$request->input('identity');
            $status="unverified";
            $id = Auth::user()->id;
            $project = project::all();
        
           $project = project::create(['projectName' => $projectName,
            'category'=>$type,
            'title'=>$title,
            'id'=>$id,
            'detail'=>$content,
            'introduction'=>$introduction,
            
            'goals'=>$goals,
            'status'=>$status,
            'begin_time'=>$begin_time,
            'end_time'=>$end_time,
            'owner'=>$owner,
            'phone'=>$phone,
            'identity'=>$identity
            ]);
            
            

            //return $type+""+$title+$introduction+$goals+$begin_time+$end_time+$owner+$phone+$identity;
            return "status=".$status." content=".$content;
        }






    }

   
}
 