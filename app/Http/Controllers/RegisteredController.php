<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RegisteredController extends Controller
{
    public function index()
    {
        return view('registered.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        Gate::authorize('delete-user', Auth::user());

        User::destroy($user->id);

        return redirect()->back()->with(['success' => 'User Deleted']);
    }
}
