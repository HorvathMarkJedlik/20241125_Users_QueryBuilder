<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request)
    {
       if (DB::table('users')->insert([
            'name' => $request -> username,
            'email' => $request -> email,
            'password' => $request -> password,

       ])) {
            return redirect()->route('/users');

       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //SELECT * FROM users WHERE id = $id;
        $user = DB::table('users')->where('id', '=', $id)->first();
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