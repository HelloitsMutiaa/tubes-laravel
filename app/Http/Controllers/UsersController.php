<?php

namespace App\Http\Controllers;

use App\Models\User;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $users = User::where('level', 'siswa')->get();
        return view('users.user', ['users' => $users, 'no' => $no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'name'      => ['required', 'string', 'min:3'],
            'email'     => ['required', 'email', 'unique:users'],
            'password'  => ['required', 'min:6'],
            'birthday' => ['required'],
            'class'     => ['required', 'integer', 'max:6'],
       ]);
       
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->tgl_lahir = $request->birthday;
        $user->kelas = $request->class;
        $user->level = $request->level;
        $user->save();

        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tgl_lahir' => $request->birthday,
            'kelas' => $request->class,
        ]);

        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}
