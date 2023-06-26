<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


class RegisterController extends Controller
{
    public function showForm(): View
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:5'],
        ]);

        try {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]);

            Auth::login($user);

            return redirect()->intended('dashboard');
        } catch (\Exception $exception) {
            throw new Exception('Erreur lors de la création du compte : ' . $exception->getMessage());
        }
    }
}
