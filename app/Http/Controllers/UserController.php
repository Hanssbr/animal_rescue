<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('pages.users.index',[
            'user' => $user,
        ]);
    }


    public function edit()
    {
        $user = Auth::user();
        return view('pages.users.edit',[
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $validatedData = $request->validate([
            'name' => 'nullable|string|max:225',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'telp' => 'nullable|string|max:225',
            'password' => 'nullable|string|max:225',
        ]);

        try {
        $user->name = $validatedData ['name'];
        $user->email = $validatedData ['email'];
        $user->telp = $validatedData ['telp'];

        $user->save();

        return redirect()->route('user.profile')->with('successMessage', 'Profile Berhasil Di Update');
        } catch (\Throwable $th) {
            return redirect()->route('user.profile')->with('errorMessage', 'Profile Gagal Di Update');
        }
    }
}
