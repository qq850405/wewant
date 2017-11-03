<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Exception;
use \App\feedback;
use \App\project;

class ProjectController extends Controller
{       
    
    //

    public function index(){

        $query =project::all();
        return view('index',compact('query'));



    }
    public function create_step1(){


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




            //upload image

            $file = $request->file('pic');
            $fileName=$_FILES["pic"]['name'];
            $destinationPath= public_path('coverImg');
            $new_fileName=date('Ymd').'_'.$fileName;

            if (Input::hasFile('pic')) {
            $upload_success = $file->move($destinationPath, $fileName);
            $path = $fileName;
            // echo "img upload success!".$path;
            } else {
            // echo "img upload failed!";
            }
            // echo $path;


            


           $project = project::create(['projectName' => $projectName,
            'category'=>$type,
            'title'=>$title,
            'id'=>$id,
            'detail'=>$content,
            'pic_path'=>$path,
            'introduction'=>$introduction,
            'goals'=>$goals,
            'status'=>$status,
            'begin_time'=>$begin_time,
            'end_time'=>$end_time,
            'owner'=>$owner,
            'phone'=>$phone,
            'identity'=>$identity
            ]);





            $query;
            //$query=project::find('projectNo');
            $projectNo=project::orderBy('projectNo','DESC')->select('projectNo')->firstOrFail();
            // $projectNo=project::find('projectNo')->orderBy('projectNo','DESC')->firstOrFail();
            // getLatesteProject::where('projectNo')->firstOrFail();
            

            $rewardLength=$request->input('r_num');
            // echo "reward= ".$rewardLength;
            $projectNo["projectNo"];

            for($i=1;$i<=$rewardLength;$i++){
                
                $feedback_name=$request->input('reward-name'.$i);
                $feedback_price=$request->input('reward-pirce'.$i);
                // $feedback_icon=$request->input('reward-upload'.$i);

                //upload img
                $file = $request->file('reward-upload'.$i);
                $fileName=$_FILES["reward-upload".$i]['name'];
                $destinationPath= public_path('feedbackImg');
                $new_fileName=date('Ymd').'_'.$fileName;

                if (Input::hasFile('reward-upload'.$i)) {
                $upload_success = $file->move($destinationPath, $fileName);
                $path = $fileName;
                // echo "feedbackimg upload success!".$path;
                // echo $path;
                } else {
                // echo "feedbackimg upload failed!";
                }
                

                
                $feedback_description=$request->input('reward-des'.$i);
                $feedback_sentDate=$request->input('reward-year'.$i).'/'.$request->input('reward-month'.$i);
                $feedback_sentMethod=$request->input('reward-sent'.$i);
                $feedback_sentPrice=$request->input('reward-price'.$i);
                // echo $feedback_description;
            $feedback = feedback::create([
            'projectNo' => $projectNo['projectNo'],
            'feedbackName'=>$feedback_name,
            'icon'=>$path,
            'des'=>$feedback_description,
            'price'=>$feedback_sentPrice,
            'sentDate'=>$feedback_sentDate,
            'sentMethod'=>$feedback_sentMethod
            ]);
            return redirect('/CreateProject/success');



            
            }
            
 
        }






    }
    public function show($id){

        
        $query = project::where('projectNo',$id)->get();
        //$query=project::orderBy('projectNo','DESC')->firstOrFail();
        return view('project.project',compact('query'));
        
    }
    public function show_ajax($id,$item){
        $query = project::where('projectNo',$id)->get();
        //$name=array('測試啦幹');
        return View::make('project.'.$item, compact('query')) ;

    }

    public function category_resault($category){

        $query = project::where('category',$category)->get();
          return $query;
        // return View::make('project_filter',compact('query'));
    }
}
 