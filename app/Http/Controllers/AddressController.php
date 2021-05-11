<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AddressController extends Controller
{
    /**
     * Display a listing of the addreses
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view("user_office_address", [
            "addresses" => Address::all()->sortBy("name")
        ]);
    }

    /**
     * Store a newly created address in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'city' => 'required|max:255',
            'area' => 'required|max:255',
            'street' => 'required',
        ]);

        $address = new Address(array_map('htmlspecialchars', $request->all()));
        $address->save();

        return Redirect::to('/address')->with('success','You have been successfully saved new address.');

    }

}
