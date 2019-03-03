<?php
// php artisan make:controller UserController
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    	return view('admin.dashboard');
    }

    public function list_user() {
    	return view('admin.users.list_user');
    }

    public function get_add_user() {
    	return view('admin.users.add_user');
    }

    public function add_user(Request $request) {
    	$name = $request->name;
    	$email = $request->email;
    	$pass = Hash::make($request->pwd);
    	DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $pass]);
    }
}
