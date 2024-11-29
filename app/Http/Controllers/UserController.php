<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\table;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //SELECT * FROM users
        $user = DB::table('users')->get();
        return view('users.index', ['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {

        // $request->validate([
        //     'username' => 'required|string|min:4|max:255',
        //     'email' => 'required|email|string|unique:users,email',
        //     'password' => 'required|string',
        // ], [
        //     'required' => 'A(z):attribute mező kitöltése kötelező'
        // ],);

       if (DB::table('users')->insert([
            'name' => $request -> username,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),

       ])) {
            // return redirect()->route('/users');
            return redirect()->route('users.index')->with('success', 'User created successfully');

       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //SELECT * FROM users WHERE id = $id;
        $user = DB::table('users')->where('id', '=', $id)->first();
        if (!$user){
            return redirect()->route('users.index')->with('error', 'User not found');
        }
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
