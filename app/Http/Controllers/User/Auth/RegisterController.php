<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
    
}
