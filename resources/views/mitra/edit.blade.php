@extends('layout.main')

@section('title', 'Form Edit Mitra')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form Edit Mitra</h1>
        
            <form method="post" action="/mitra/{{ $mitra->id_mitra }}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="Nama Mitra">Nama Mitra</label>
                <input type="text" class="form-control" id="nm_mitra" placeholder="Masukkan Nama Mitra" name="nm_mitra" value="{{ $mitra->nm_mitra }}">
            </div>
            <div class="form-group">
                <label for="Nama PJ">Nama PJ</label>
                <input type="text" class="form-control" id="nm_pjmitra" placeholder="Masukkan Nama PJ" name="nm_pjmitra" value="{{ $mitra->nm_pjmitra }}">
            </div>
            <div class="form-group">
                <label for="No Rek">No Rek</label>
                <input type="text" class="form-control" id="no_rek" placeholder="Masukkan No Rek" name="no_rek" value="{{ $mitra->no_rek }}">
            </div>
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" value="{{ $mitra->username }}">
            </div> 
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="{{ $mitra->email }}">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" value="{{ $mitra->password }}">
            </div>
            <div class="form-group">
                <label for="No HP">No HP</label>
                <input type="text" class="form-control" id="no_hp" placeholder="Masukkan No HP" name="no_hp" value="{{ $mitra->no_hp }}">
            </div>
            <div class="form-group">
                <label for="Logo Mitra">Logo Mitra</label>
                <input type="file" class="form-control-file" id="logo_mitra" placeholder="Masukkan Logo Mitra" name="logo_mitra">
            </div>
            <button type="submit" class="btn btn-primary my-3">Ubah Data</button>   
            </form>

        </div>
    </div>
</div>
@endsection
