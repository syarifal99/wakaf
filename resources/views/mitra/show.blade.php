@extends('layout.main')

@section('title', 'Detail Mitra')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mitra</h1>
                
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nama Mitra: {{ $mitra->nm_mitra }}</h5>
                    <p class="card-text">Nama PJ :  {{ $mitra->nm_pjmitra }}</p>
                    <p class="card-text">Logo :     {{ $mitra->logo_mitra }}</p>
                    <p class="card-text">No Rek :   {{ $mitra->no_rek }}</p>
                    <p class="card-text">Username : {{ $mitra->username }}</p>
                    <p class="card-text">Email :    {{ $mitra->email }}</p>
                    <p class="card-text">Password : {{ $mitra->password }}</p>
                    <p class="card-text">No Hp :    {{ $mitra->no_hp }}</p>
                        
                    <a href="{{ $mitra->id_mitra }}/edit" class="btn btn-primary">Edit</a>    
                    
                    <form action="{{ $mitra->id_mitra }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/mitra" class="card-link">Kembali</a>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
