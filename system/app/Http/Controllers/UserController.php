<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
	function index(){
		//menampilkan semua user
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}

	function create(){
		return view('user.create');
	}

	function store(){
		$user = new User;
		$user->nama_user = request('nama_user');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = (request('password'));
		$user->jenis_kelamin = 0;
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();
		
		return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
	}

	function show(User $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}

	function update(User $user){
		$user->nama_user = request('nama_user');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = (request('password'));
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Diubah');
	}

	function destroy(user $user){
		$user->delete();
		return redirect('admin/user')->with('danger','Data Berhasil Dihapus');
	}
}