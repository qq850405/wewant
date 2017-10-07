<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;

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

            $projectName = $request->only('projectName');
            $type = $request->only('type');
            $check= $request->only('check');
            
            Session::put('projectName', $projectName);
            Session::put('type', $type);


            return View::make('project.proposal');

        
        
        }

    }

   
}
 