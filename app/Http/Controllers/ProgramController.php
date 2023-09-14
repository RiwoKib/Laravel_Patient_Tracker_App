<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProgramController extends Controller
{
    // // show all programs
    // public function index()
    // {

    // }


    //show single program
    public function show(Program $program)
    {
        return view('user.program', [
            'program' => $program
        ]);
    }

    function addUsers(Request $req)
    {
       // dd($req->all());
        $program = new ProgramUser();
    
        $program->title = $req->title;
        $program->user_id = Auth::user()->id;
        $program->user_name = Auth::user()->name;
        $program->save();   

        print_r($program);
    }
}
