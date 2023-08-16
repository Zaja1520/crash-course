<?php

namespace App\Http\Controllers;
use App\Models\Listings;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function joblistings(Request $request){
        $jobs = Listings::all();
        return view('pages.job-listing', ['jobs' => $jobs]);
    }
}
