<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mitra;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = DB::table('mitra')->get();
        //$mitra = Mitra::all();
        return view('mitra.index', ['mitra' => $mitra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mitra = new Mitra;
        // $mitra->nm_mitra = $request->nm_mitra;
        // $mitra->nm_pjmitra = $request->nm_pjmitra;
        // $mitra->no_rek = $request->no_rek;
        // $mitra->username = $request->username;
        // $mitra->email = $request->email;
        // $mitra->password = $request->password;
        // $mitra->no_hp = $request->no_hp;
        // $mitra->logo_mitra = $request->logo_mitra;

        // $mitra->save();
        Mitra::create($request->all());
        return redirect('/mitra')->with('status','Data Mitra Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        //$mitra = Mitra::all();
        //$mitra = DB::table('mitra')->get($id_mitra);
        return view('mitra.show', compact('mitra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(mitra $mitra)
    {
        return view('mitra.edit', compact('mitra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        Mitra::where('id_mitra', $mitra->id_mitra)
            ->update([
                'nm_mitra' => $request->nm_mitra,
                'nm_pjmitra' => $request->nm_pjmitra,
                'no_rek' => $request->no_rek,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'no_hp' => $request->no_hp,
                'logo_mitra' => $request->logo_mitra
            ]);
            return redirect('/mitra')->with('status','Data Mitra Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        mitra::destroy($mitra->id_mitra);
        return redirect('/mitra')->with('status','Data Mitra Berhasil Dihapus !');
    
    }
}
