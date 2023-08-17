<?php

namespace App\Http\Controllers;
use App\Models\Listings;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; // for testing purposes

class JobController extends Controller
{
    public function joblistings(Request $request)
    {
        // create orm filter through search or by tag
        $jobs = Listings::latest()->filter(request(['tag', 'search']))->get();
        // pass the data on job-listing view and render the view
        return view('pages.job-listing', ['jobs' => $jobs]);
    }
    public function jobProfile(Request $request, $id)
    {
        // orm find $id
        $job = Listings::findOrFail($id);
        // pass the data on job-info view and render the view
        return view('pages.job-info', ['job' => $job]);
    }

    public function createJob(Request $request)
    {
        //return create job view
        return view('pages.job-create');
    }

    public function storeJob(Request $request)
    {
        $formFields = $request->validate([

            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'email' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'website' => 'required',
            'tags' => 'required',
        ]);
        $storeJob = Listings::create($formFields);
        if ($storeJob) {
            //return with flash message
            return redirect('/job-listings')->with('message', 'listing created successfully');
        }
        else{
            return back();
        }
    }
}
