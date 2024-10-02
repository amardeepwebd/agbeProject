<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Method to get states based on selected country
    public function getStatesByCountry($country_id)
    {
        $states = State::where('country_id', $country_id)->get();
        return response()->json($states);
    }

    // Method to get cities based on selected state
    public function getCitiesByState($state_id)
    {
        $cities = City::where('state_id', $state_id)->get();
        return response()->json($cities);
    }

    public function showRegistrationForm()
    {
       $countries = Country::all(); // Fetch all countries
       //echo $countries;die;
       return view('auth.register', compact('countries')); // Pass countries to the view
    }

    // Method to handle registration logic
    public function register(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'locality' => 'required|string|max:255',
            'pincode' => 'required|string|max:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create new user
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dob = $request->dob;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->locality = $request->locality;
        $user->pincode = $request->pincode;
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }


    // Other methods for showing the registration form, handling the registration logic, etc.
}

