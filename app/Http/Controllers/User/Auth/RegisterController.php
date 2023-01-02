<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Generation;
use Hash ;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.auth.registration');
    }
    public function searchsponsor(Request $request){
        $sponsor_id = $request->sponsor_id;
        $check = User::where(['username'=>$sponsor_id, 'status'=>1])->exists();
        if($check){

            $data = User::where(['username'=>$sponsor_id,'status'=>1])->first();
            // return redirect()->back()->with('success','Sponsor ID found')->with('data',$data);
            echo $data->first_name;
        }else{
            // return redirect()->back()->with('error','Sponsor ID not found');
            // echo "Sponsor ID not found";
        }

    }
    public function store(Request $request)
    {
        $request->validate([
            'sponsor_code'=>'required',
            'first_name'=>'required|min:2|max:25',
            'last_name'=>'required|min:2|max:25',
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'phone'=>'required|numeric|unique:users',
            'password'=>'required|confirmed|min:6|max:25',
            'password_confirmation'=>'required',
        ]);


            $sponsor_check = User::where(['username'=>$request->sponsor_code,'status'=>1])->exists();
            if($sponsor_check)
            {
                $sponsor_details = User::where(['username'=>$request->sponsor_code,'status'=>1])->first();
                $model = new User();
                $model->first_name = $request->first_name;
                $model->last_name = $request->last_name;
                $model->username = $request->username;
                $model->email = $request->email;
                $model->phone = $request->phone;
                $model->sponsor_code = $sponsor_details->id;
                $model->password = Hash::make($request->password);
                // dd($model);
                $model->save();

                return view('user.auth.login');
        // if($sponsor_check)
        // {
        //     $sponsor_details = User::where(['username'=>$request->sponsor_code,'status'=>1])->first();
        //     $model - new User();
        //     $model->first_name = $request->first_name;
        //     $model->last_name = $request->last_name;
        //     $model->username = $request->username;
        //     $model->email = $request->email;
        //     $model->phone = $request->phone;
        //     $model->sponsor_code = $sponsor_details->id;
        //     $model->password = Hash::make($request->password);
        //     // dd($model);
        //     $model->save();
            
        //     return view('user.auth.login');
           
        }else
        {
            // return redirect()->back()->with('error','Sponsor ID not found');
        }
        
    }
    
}
