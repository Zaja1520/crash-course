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
        $jobs = Listings::latest()->filter(request(['tag', 'search']))->Paginate(10);
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
        // check if logo exist in request
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        // store the form fields
        $storeJob = Listings::create($formFields);
        if ($storeJob) {
            //return with flash message

            return redirect('/job-listings')->with('message', 'listing created successfully');
        }
        else{
            return back();
        }
    }

    //edit controllers
    public function editJob(Request $request, $id){
        $job = Listings::findOrFail($id);
        return view('pages.job-edit', ['job' => $job]);
    }

    public function updateJob(Request $request, Listings $id)
    {
        $formFields = $request->validate([

            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'email' => 'required',
            'company' => 'required',
            'website' => 'required',
            'tags' => 'required',
        ]);
        // check if logo exist in request
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        // update the form fields
        $updateJob = $id->update($formFields);
        if ($updateJob) {
            //return with flash message

            return back()->with('message', 'listing updated successfully');
        }
        else{
            return back();
        }
    }

    public function deleteJob (Listings $id)
    {
        $deleteJob = $id->delete();
        if ($deleteJob) {
            //return with flash message

            return redirect('/job-listings')->with('message', 'listing deleted successfully');
        }
        else{
            return back();
        }
    }
    //manage jobs of current user
    public function manageJobs(){
        //query to match current user id on the job listings model
        $jobs = Listings::where('user_id', auth()->id())->get();
        return view('pages.job-manage', ['jobs' => $jobs]);
    }
}
