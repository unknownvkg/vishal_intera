<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\{Country, State, City};

class DropdownController extends Controller
{
    public function index()
    {
        //  $data['countries'] = Country::get(["name", "id"]);

        // echo "<pre>"; print_r($data);echo "</pre>";
        // die;
        // return view('contractor/contractor-form', $data);

        //return view('contractor/contractor-form', ['countries' => Country::all()]);


        $countries = Country::all();

        // Pass data to view
     //   return view('contractor/contractor-form', ['countries' => $countries]);
        // return view('test',$countries);
        return view('contractor.contractor-form', ['countries' => $countries]);




    }




    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
