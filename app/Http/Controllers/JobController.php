<?php

namespace App\Http\Controllers;
use App\Models\Listings;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function joblistings(Request $request){
        // create orm filter through search or by tag
        $jobs = Listings::latest()->filter(request(['tag', 'search']))->get();
        // pass the data on job-listing view and render the view
        return view('pages.job-listing', ['jobs' => $jobs]);
    }
    public function jobProfile(Request $request, $id){
        // orm find $id
        $job = Listings::findOrFail($id);
        // pass the data on job-info view and render the view
        return view('pages.job-info', ['job' => $job]);
    }
}
