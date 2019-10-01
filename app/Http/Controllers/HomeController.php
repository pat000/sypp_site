<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Applicants;
use App\Jobs;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jobs'] = Jobs::get();

        return view('home', $data);
    }

    public function job($slug)
    {
        $data['job'] = Jobs::where('slug', '=' , $slug)->first();

        return view('job', $data);
    }


    public function submit_application(Request $request)
    {

        $email = request('email');
        $file = \Request::file('resume');
        if(\Request::hasFile('resume') )

         {
            $checkApplication = Applicants::where('email' , $email)->first();
            if (!$checkApplication)
            {
                $application = new Applicants();
                $application->name = request('name');
                $application->email = $email;
                $application->job_id = request('job_id');
                $application->resume = '/resume/'.$email.'/'.$file;
         
                $application->save();

                $destinationPath = public_path('/resume');
                
                $avatar_width = 200;
                $avatar_height = 200;

                @\File::makeDirectory($destinationPath, 0777, true);
                $destinationPath .= '/'.$email;
                @\File::makeDirectory($destinationPath, 0777, true);

                $name = $file->getClientOriginalName();
                @$file->move($destinationPath,$name);
                    
                return redirect()->back()->with('success', 'Application successfully sent.'); 

            }else {
                return redirect()->back()->with('error', 'Application Already exist from your email address.'); 

            }
         }else {
                return redirect()->back()->with('error', 'Please upload valid Resume.'); 

         }
        
 
        
    }

}
