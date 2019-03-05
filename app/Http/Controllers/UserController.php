<?php
// php artisan make:controller UserController
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\View\Middleware\ShareErrorsFromSession;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    	return view('admin.dashboard');
    }

    public function list_user() {
    	$users['users'] = DB::table('users')->get();
    	return view('admin.users.list_user', $users);
    }

    public function get_add_user() {
    	return view('admin.users.add_user');
    }

    public function add_user(Request $request) {
    	$request->validate([
    		'name' => 'required|max:255',
    		'email' => 'required|email',
    		'password' => 'required|max:20|min:4',
    	]);
    	$name = $request->name;
    	$email = $request->email;
    	$pass = Hash::make($request->password);
    	DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $pass]);
    	return redirect('admin/list_user');
    }

    public function getUserToEdit($id) {
    	$users['users'] = DB::table('users')->where('id', $id)->get();
    	return view('admin.users.edit_user', ['id' => $id]);
    }

    public function delete_user($id) {
    	DB::table('users')->where('id', $id)->delete();
    	return redirect('admin/list_user');
    }
}
