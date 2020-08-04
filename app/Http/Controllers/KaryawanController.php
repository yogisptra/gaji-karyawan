<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
	public function index()
    {
    	$data_karyawan = \App\Karyawan::all();
    	return view('index', ['data_karyawan' => $data_karyawan]);
    }

	public function create(Request $request)
    {
		\App\Karyawan::create($request->all());
		return redirect('/');
    }

    public function edit($id)
	{
		$data_karyawan = \App\Karyawan::find($id);
		return view('/edit', ['data_karyawan' => $data_karyawan]);
	}
	
	public function update(Request $request, $id)
	{
		$data_karyawan = \App\Karyawan::find($id);
		$data_karyawan->update($request->all());
		return redirect('/')->with('sukses', 'Data Berhasil di Update');
	}

	public function delete($id)
	{
		$data_karyawan = \App\Karyawan::find($id);
		$data_karyawan->delete();
		return redirect('/')->with('sukses', 'Data Berhasil di Delete');
	}
}
