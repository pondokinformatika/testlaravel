<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
    public function index()
    {
    	$user = User::orderBy('id', 'desc')->paginate(2);
    	return view('user.index', compact('user'));
    }

    public function insert(Request $request)
    {
    	$request->validate([
    		'name' => 'required|min:5',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:5'
    	]);

    	$request->merge([
    		'password' => bcrypt($request->password),
    		'name' => title_case($request->name)
    	]);
    	User::create($request->all());

		return redirect('user')->with('user', 'Data berhasil dimasukkan');
    }

    public function hapus($id)
    {
    	User::find($id)->forceDelete();
    	return redirect('user')->with('user', 'Data Berhasil dihapus');
    }

    public function create()
    {
    	return view('user.create');
    }

    public function edit($id)
    {
    	$user = User::find($id);// select * from santri where id = $id
    	return view('user.edit', compact('user'));
    }

    public function update(Request $abc)
    {
    	$request->merge([
    		'password' => bcrypt($request->password)
    	]);

    	User::find($abc->id)->update($abc->all());
    	return redirect('user')->with('user', 'Data Berhasil diperbarui');
    }
}
