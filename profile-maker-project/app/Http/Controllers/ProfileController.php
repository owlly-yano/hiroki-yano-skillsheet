<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller\Profile;
use Illuminate\Http\Request;
use App\Models\Member;

class ProfileController extends Controller
{

    public function showSkillSheet(){
        return view('profile.index');
    }

    public function getProfile(){
        $profile = Member::get();

        return view('profile.profile')
            ->with('profile', $profile[0]);
    }

}
