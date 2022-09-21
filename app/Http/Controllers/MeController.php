<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeController extends Controller
{
    public function index(){
        $aboutme = DB::table('Me')->first();
        return view('index', ['aboutme' => $aboutme]);
    }

    //
    public function test(){
        $aboutme = DB::table('Me')->first();
        return view('test', ['aboutme' => $aboutme]);
    }
}


