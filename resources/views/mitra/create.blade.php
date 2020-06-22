@extends('layout.main')

@section('title', 'Form Tambah Mitra')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form Tambah Mitra</h1>
        
            <form method="post" action="/mitra">
            @csrf
            <div class="form-group">
                <label for="Nama_Mitra">Nama Mitra</label>
                <input type="text" class="form-control" id="Nama_Mitra" placeholder="Masukkan Nama Mitra" name="nm_mitra">
            </div>
            <div class="form-group">
                <label for="Nama_PJ">Nama PJ</label>
                <input type="text" class="form-control" id="Nama_pj" placeholder="Masukkan Nama PJ" name="nm_pjmitra">
            </div>
            <div class="form-group">
                <label for="No_Rek">No Rek</label>
                <input type="text" class="form-control" id="No_Rek" placeholder="Masukkan No Rek" name="no_rek">
            </div>
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" id="Username" placeholder="Masukkan Username" name="username">
            </div> 
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="Email" placeholder="Masukkan Email" name="email">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Masukkan Password" name="password">
            </div>
            <div class="form-group">
                <label for="No_HP">No HP</label>
                <input type="text" class="form-control" id="No_Hp" placeholder="Masukkan No HP" name="no_hp">
            </div>
            <div class="form-group">
                <label for="Logo_Mitra">Logo Mitra</label>
                <input type="file" class="form-control-file" id="Logo_Mitra" name="logo_mitra">
            </div>
            <button type="submit" class="btn btn-primary my-3">Tambah Data</button>   
            </form>

        </div>
    </div>
</div>
@endsection
