<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '0')
            {   
                $programs = Program::all();
                $status = ProgramUser::all();

                return view('user.home', compact('programs', 'status'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }
}
