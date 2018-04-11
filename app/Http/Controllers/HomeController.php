<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;

class HomeController extends Controller
{
    public function listSantri()
    {
    	$santri = Santri::orderBy('id', 'desc')->get();
    	return view('santri.index', compact('santri'));
    }

    public function insert(Request $request)
    {

    	Santri::create($request->all());
    	// \Session::flash('santri', 'Data berhasil dimasukkan');
		return redirect('santri')->with('santri', 'Data berhasil dimasukkan');
    }

    public function hapus($id)
    {
    	Santri::find($id)->delete();
    	return redirect('santri')->with('santri', 'Data Berhasil dihapus');
    }

    public function create()
    {
    	// return 'method get';
    	return view('santri.create');
    }

    public function edit($id)
    {
    	$santri = Santri::find($id);// select * from santri where id = $id
    	return view('santri.edit', compact('santri'));
    }

    public function update(Request $abc)
    {
    	// $santri = Santri::find($abc->id);
    	// $santri->nama = $abc->nama;
    	// $santri->alamat = $abc->alamat;
    	// $santri->tgl_lahir = $abc->tgl_lahir;
    	// $santri->jenis_kelamin = $abc->jenis_kelamin;
    	// $santri->save();

    	Santri::find($abc->id)->update($abc->all());

    	return redirect('santri')->with('santri', 'Data Berhasil diperbarui');
    }

}
