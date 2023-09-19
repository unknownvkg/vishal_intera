<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Models\Contractor;
use Illuminate\Support\Facades\Validator;


class ContractorController extends Controller
{

    public function index()
    {
        return view('contractor/login');
    }

    // inserting the data


    /// end 


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'full_name' => 'required|string|max:255',
            'contractor_email' => 'required|email', // assuming it should be an email
            'contractor_phone' => 'required|string|max:255', // adjust max length as needed
            'contractor_password' => 'required|min:6|confirmed',
            'contractor_gender' => 'required', // adjust options as needed
            'contractor_age' => 'required|integer|min:18|max:100', // adjust min and max age as needed
            'contractor_experience_year' => 'required|integer|min:0|max:50', // adjust min and max as needed
            'contractor_country' => 'required',
            'contractor_state' => 'required',
            'contractor_city' => 'required',
            'contractor_pincode' => 'required', // adjust max length as needed
            'contractor_complete_address' => 'required', // adjust max length as needed
            'contractor_aadharNo' => 'required|string|max:20', // adjust max length as needed
            'contractor_panNo' => 'required|string|max:20', // adjust max length as needed
            'contractor_profile' => 'required|string|max:255', // adjust max length as needed
            'registrationDate' => 'required|date',



        ]);

// echo "<pre>"; print_r($request); echo "</pre>";
// die;






        if ($validator->fails()) {
            return response()->json(
                [
                    "status" => 422,
                    "massage" => $validator->messages(),
                ],
                422
            );
        } else {
            $student_document = Contractor::create([
                "full_name" => $request->full_name,
                "contractor_email" => $request->contractor_email,
                "contractor_phone" => $request->contractor_phone,
                "contractor_password" => $request->contractor_password,
                "contractor_gender" => $request->contractor_gender,
                "contractor_phone" => $request->contractor_phone,
                "contractor_age" => $request->contractor_age,
                "contractor_experience_year" => $request->contractor_experience_year,
                "contractor_country" => $request->contractor_country,
                "contractor_state" => $request->contractor_state,
                "contractor_city" => $request->contractor_city,
                "contractor_pincode" => $request->contractor_pincode,
                "contractor_complete_address" => $request->contractor_complete_address,
                "contractor_aadharNo" => $request->contractor_aadharNo,
                "contractor_panNo" => $request->contractor_panNo,
                "contractor_profile" => $request->contractor_profile,
                "registrationDate" => $request->registrationDate,
            ]);

            session()->flash('success', 'Data added successfully.');
            return view('contractor/login');
        }
    }

    public function register()
    {
        return view('contractor/contractor-form');
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $result = Contractor::where(['contractor_email' => $email, 'contractor_password' => $password])->get();
        // echo "<pre>";
        // print_r($request);
        // echo "</pre>";
        // die;


        // if(isset($result['0']->admin_id)){
        if (isset($request)) {
            $request->session()->put('ADMIN_LOGIN', true);
            //    $request->session()->put('ADMIN_ID',$result['0']->id);
            return redirect('contractor/dashboard');
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('contractor/login');
        }
    }

    public function dashboard()
    {
        return redirect('contractor/dashboard');
    }
}
