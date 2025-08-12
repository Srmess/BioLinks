<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request)
    {
        $user = Auth::user();

        $payload = $request->validated();

        if ($file = $request->profile_photo) {
            $profilePhotoUrl = $file->store('profile_photo');

            $payload['profile_photo_url'] = $profilePhotoUrl;
        }

        unset($payload['profile_photo']);

        $user->fill($payload)->save();

        return back()->with('message', 'Perfil editado com sucesso!');
    }
}
