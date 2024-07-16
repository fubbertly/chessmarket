<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Add address information to the user's profile.
     */
    public function addAddress(Request $request): RedirectResponse
    {
        $request->validate([
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'street' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
        ]);

        $address = $request->addresses();

        // Create or update the address information
        $addresses->addresses()->updateOrCreate(
            ['user_id' => $addresses->id], // Assuming the address is related to the user
            $request->only(['user_id', 'state', 'city', 'street', 'postal_code'])
        );

        return Redirect::route('profile.edit')->with('status', 'address-added');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'state' => 'required',
            'city' => 'required',
            'street' => 'required',
            'postal_code' => 'required',
        ]);

        $address = new Address();
        $address->user_id = Auth::id(); 
        $address->state = $validatedData['state'];
        $address->city = $validatedData['city'];
        $address->street = $validatedData['street'];
        $address->postal_code = $validatedData['postal_code'];
        $address->save();

        return redirect()->route('addresses.add')->with('success', 'Address saved.');
    }
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
