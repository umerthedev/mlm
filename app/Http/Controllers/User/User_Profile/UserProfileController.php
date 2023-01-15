<?php

namespace App\Http\Controllers\User\User_Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
   public function userprofile()
   {
    return view('user.dashboard.profile.index');
   }
}
