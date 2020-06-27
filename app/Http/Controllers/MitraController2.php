<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mitra;
use File;

class MitraController2 extends Controller
{
    public function dataMitra(){
		
		return view('admin/dataMitra');
    }
    public function create(){
		
		return view('admin/formMitra');
    }
    
	public function upload(){
		$gambar = Mitra::get();
		return view('/admin/dataMitra',['gambar' => $gambar]);
    }
    public function show($id){
		$gambar = Mitra::where('id_mitra', $id)->first();
		return view('/admin/detailMitra', array(
			'gambar' => $gambar
		  ));
	}
	public function store(Request $request){
		$this->validate($request, [
            'nm_mitra' => 'required',
            'nm_pjmitra' => 'required',
            'no_rek' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
			'logo_mitra' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('logo_mitra');

		$nama_file = time()."_".$file->getClientOriginalExtension();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Mitra::create([
            'nm_mitra' => $request->nm_mitra,
            'nm_pjmitra' => $request->nm_pjmitra,
            'no_rek' => $request->no_rek,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
			'logo_mitra' => $nama_file,
		]);

		$gambar = Mitra::get();
		return view('/admin/dataMitra',['gambar' => $gambar]);
	}

	public function destroy($id)
    {
		// hapus file
		$gambar = Mitra::where('id_mitra',$id)->first();
		File::delete('data_file/'.$gambar->file);
 
		// hapus data
		Mitra::where('id_mitra',$id)->delete();
 
		return redirect('/PendaftaranMitra');
	}
	
	public function edit($id)
    {
		$gambar=Mitra::find($id);
		return view('/admin/formMitraEdit',['gambar' => $gambar]);
		// var_dump($gambar);
	}

	public function update(Request $request, $id)
	{
		$gambar=Mitra::find($id);
		
		$gambar->nm_mitra = $request-> input('nm_mitra');
		$gambar->nm_pjmitra = $request->input('nm_pjmitra');
		$gambar->no_rek = $request->input('no_rek');
		$gambar->username = $request->input('username');
		$gambar->email = $request->input('email');
		$gambar->password = $request->input('password');
		$gambar->no_hp = $request->input('no_hp');
		
		if($request->file('logo_mitra')){
			$file = $request->file('logo_mitra');
			$nama_file = time()."_".$file->getClientOriginalExtension();
			$tujuan_upload = 'data_file';
			$file->move($tujuan_upload,$nama_file);
			$gambar->logo_mitra = $nama_file;
		}

		$gambar->save();
		return redirect ('/PendaftaranMitra')->with('gambar',$gambar);
		
    }


}