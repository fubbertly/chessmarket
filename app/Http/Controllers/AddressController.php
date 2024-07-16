<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Auth; 

class AddressController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */
    public function add()
    {
        return view('profile.partials.edit-address-information-form');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = auth()->user();
    
        $address = Address::where('user_id', $user->id)->first();
    
        if ($address) {
            $address->update($request->all());
        } else {
            $address = Address::create($request->all() + ['user_id' => $user->id]);
        }

        return redirect()->route('addresses.add')->with('success', 'Address saved.');
    }
}
