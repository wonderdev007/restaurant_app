<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        // return $users = User::All();
        $users = User::paginate(5);
        return view('admin/users/all', ['users' => $users]);
    }

    public function create() {
        $roles = Role::All();
        return view('admin/users/create', ['roles' => $roles]);
    }

    public function store() {
        // return request()->all();

        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        // save user data & attach a role to that user
        $user->save();
        $user->roles()->attach(request('role_id'));

        // User::create([
        //     'fname' => request('fname'),
        //     'lname' => request('lname'),
        //     'email' => request('email'),
        //     'password' => Hash::make(request('password'))
        // ]);

        return redirect('/admin/users');
    }

    public function showEditData($id) {
        $user = User::find($id);
        $roles = Role::All();

        return view('admin/users/edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update($id) {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);

        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->sync([request('role_id')]);

        return redirect('/admin/users');
    }
}
