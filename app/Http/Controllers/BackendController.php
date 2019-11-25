<?php

namespace App\Http\Controllers;

use App\models\admin;
use App\position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class BackendController extends Controller
{
    public function test()
    {
        return view('pages.test');
    }

    public function loginpage()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.registration');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
            'username'=>'required|unique:admin,username',
            'full_name'=>'required'
        ]);

        if($request->password != $request->confirm_password)
            {
                return redirect()->back()->with('failed','The two passwords does not match');
            }

        if(admin::create([
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'username'=>$request->username,
            'full_name'=>$request->full_name
        ]))
        {
            return redirect(route('loginpage'))->with('success','Your admin account has been created');
        }
        else
        {
            return redirect()->back()->with('failed','There were some problems');
        }

    }

    public function login_operation(Request $request)
    {
        $email=$request->email;
        $password=$request->password;

        $datas=admin::get()->all();

        foreach($datas as $data)
        {
            if($data->email==$email)
            {
                if(Hash::check($password, $data->password))
                {
                    return redirect(route('dashboard',$data->id));
                }
                else
                {
                    return redirect()->back()->with('failed','Password Incorrect');
                }
            }
        }
        return redirect()->back()->with('failed','Email Incorrect');
    }

    public function dashboard($id)
    {
        $datas=position::orderby('created_at','desc')->where('user_id','=',$id)->paginate(5);
        return view('pages.dashboard.main',compact('datas','id'));
    }

    public function create_position($id)
    {
        return view('pages.dashboard.create_position')->with('id',$id);
    }

    public function store_position(Request $request,$id)
    {
        $this->validate($request,[
           'position'=>'required',
            'department'=>'required',
            'location'=>'required',
            'category'=>'required',
            'education'=>'required',
            'experience'=>'required',
            'openings'=>'required',
            'description'=>'required',
        ]);

            $jobtype=implode('/',$request->job_type);
        if(position::create([
            'position'=>$request->position,
            'department'=>$request->department,
            'location'=>$request->location,
            'job_type'=>$jobtype,
            'category'=>$request->category,
            'education'=>$request->education,
            'experience'=>$request->experience,
            'openings'=>$request->openings,
            'description'=>$request->description,
            'user_id'=>$id
        ]))
        {
            return redirect()->back()->with('success','The position has been placed Successfully');
        }
        else
        {
            return redirect()->back()->with('failed','There were some problem\'s');
        }

    }

    public function details($id)
    {
        $datas=position::find($id);
        return view('pages.dashboard.details',compact('datas'));
    }

    public function description($id)
    {
        $datas=position::find($id);
        return view('pages.dashboard.description')->with('datas',$datas);
    }

    public function edit_position($id)
    {
        $datas=position::find($id);
        return view('pages.dashboard.edit_position')->with('datas',$datas);
    }

    public function position_edited(Request $request,$id)
    {
            $datas=position::find($id);

            $jobtype=implode('/',$request->job_type);
            $datas->position=$request->position;
            $datas->department=$request->department;
            $datas->location=$request->location;
            $datas->job_type=$jobtype;
            $datas->category=$request->category;
            $datas->education=$request->education;
            $datas->experience=$request->experience;
            $datas->openings=$request->openings;
            $datas->description=$request->description;



        if($datas->save())
        {
            return redirect()->back()->with('success','Your post has been updated');
        }
        else
        {
            return view('pages.dashboard')->with('failed','There was some problems');
        }
    }

    public function delete_position($id)
    {
        $datas=position::find($id);
        if($datas->delete())
        {
            return redirect(url('dashboard/'.$datas->user_id))->with('success','Deletion Successful');
        }
    }
}
