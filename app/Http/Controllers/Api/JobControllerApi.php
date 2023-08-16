<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listings;

class JobControllerApi extends Controller
{
    public function Joblistings(Request $request){
        $jobs = Listings::all();
        return response()->json($jobs);
    }

    public function JobProfile(Request $request, $id){
        $job = Listings::where('id', $id)->first();
        return response()->json($job);
    }
}
