<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function project_details($id){
        $project = DB::table('portfolio')->find($id);
        return view('portfolio-details', compact('project'));
    }
}
