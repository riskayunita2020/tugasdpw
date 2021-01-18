<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;

class AuthController extends Controller
{
	function showLogin(){
		return view('admin.login');
	}

	function loginProcess(User $user){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('admin/beranda')->with('success','Login Berhasil, Selamat datang');
		} else {
			return back()->with('danger', 'Login gagal, Silahkan coba kembali');
		}


		// if(request('login_as') ==1){
		// 	if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
		// 		return redirect('admin/beranda/pembeli')->with('success','Login Berhasil, Selamat datang');
		// 	} else {
		// 		return back()->with('danger', 'Login gagal, Silahkan coba kembali');
		// 	}
		// }else{
		// 	if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])) {
		// 		return redirect('admin/beranda/penjual')->with('success','Login Berhasil, Selamat datang');
		// 	} else {
		// 		return back()->with('danger', 'Login gagal, Silahkan coba kembali');
		// 	}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function showRegistration(){
		return view('indexRegistration');
	}

	function storeRegistration(){
		$user = new User;
		$user->nama_user = request('nama_user');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('login')->with('success','Data Berhasil Ditambahkan');
	}

	function forgotPassword(){
		
	}
}