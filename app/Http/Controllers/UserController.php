<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'User list';
        $data['users'] = User::where('user_name','!=','admin')->get();

        return view('admin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add new user information';

        return view('admin.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_name'       => 'required|unique:users',
            'email'           => 'required|unique:users',
            'password'        => 'required',
            'retype_password' => 'required|same:password',
            'city'            => 'required',
            'country'         => 'required',
            'date_of_birth'   => 'required|date|before_or_equal:' . \Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
            'status'          => 'required',
        ]);
        $user                = new User();
        $user->user_name     = $request->user_name;
        $user->email         = $request->email;
        $user->password      = Hash::make($request->password);
        $user->city          = $request->city;
        $user->country       = $request->country;
        $user->date_of_birth = $request->date_of_birth;
        $user->status        = $request->status;
        $user->save();
        session()->flash('message', 'User information added successfully');

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit user information';
        $data['user']  = User::findOrFail($id);

        return view('admin.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_name'     => 'required|unique:users,user_name,' . $id,
            'email'         => 'required|email|unique:users,email,' . $id,
            'city'          => 'required',
            'country'       => 'required',
            'date_of_birth' => 'required|date|before_or_equal:' . \Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
        ]);

        $user                = User::findOrFail($id);
        $user->user_name     = $request->user_name;
        $user->email         = $request->email;
        $user->city          = $request->city;
        $user->country       = $request->country;
        $user->date_of_birth = $request->date_of_birth;
        $user->status        = $request->status;
        $user->update();
        session()->flash('message', 'User information updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('error', 'User information deleted successfully');

        return redirect()->back();
    }

    public function userRegistration(Request $request)
    {
        $request->validate([
            'user_name'       => 'required|unique:users',
            'email'           => 'required|unique:users',
            'password'        => 'required',
            'retype_password' => 'required|same:password',
            'city'            => 'required',
            'country'         => 'required',
            'date_of_birth'   => 'required|date|before_or_equal:' . \Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
        ]);
        $user                = new User();
        $user->user_name     = $request->user_name;
        $user->email         = $request->email;
        $user->password      = Hash::make($request->password);
        $user->city          = $request->city;
        $user->country       = $request->country;
        $user->date_of_birth = $request->date_of_birth;
        $user->save();
        session()->flash('message', 'Please wait for the confirmation');

        return redirect()->back();
    }
}
