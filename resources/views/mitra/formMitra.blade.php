@extends('layoutt/main')

@section('title','Form Pendaftaran Mitra')

@section('navbar')
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>
                    <li class="menu-title">Wakaf</li>
                    <li class="">
                        <a href="/"><i class="menu-icon fa fa-users"></i>Pendaftaran Project</a>
                    </li>
                    <li class="active">
                        <a href="/mitra-pendaftaran"><i class="menu-icon fa fa-file-text-o"></i>Pendaftaran Mitra</a>
                    </li>
                    <li class="">
                        <a href="/monitoring"><i class="menu-icon ti-blackboard"></i>Monitoring Data Nazhir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
@endsection
    
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Pendaftaran Mitra</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="">Dashboard</a></li>
                                <li><a href="">Data Mitra</a></li>
                                <li class="active">Form Pendaftaran Mitra</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Form Tambah Mitra</strong>
                    </div>
                    @if(count($errors) > 0)
				    <div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				    </div>
                    @endif
                    <div class="card-body">
                        <form action="{{url('/TambahMitra/proses/')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Nama_Mitra" class=" form-control-label">Nama
                                            Mitra</label><input type="text" id="nm_mitra" name="nm_mitra"
                                            placeholder="Masukkan Nama Mitra" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Nama_pj" class=" form-control-label">Penanggung Jawab</label><input
                                            type="text" name="nm_pjmitra" placeholder="Masukkan Nama Penanggung Jawab"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="No_Rek" class=" form-control-label">Nomor Rekening</label><input
                                            type="textr" id="No_Rek" name="no_rek" placeholder="Masukkan Nomor Rekening"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="username" class=" form-control-label">Username</label><input
                                            type="text" name="username" placeholder="Masukkan Username"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">Email</label><input
                                            type="text" name="email" placeholder="Masukkan Email"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password" class=" form-control-label">Password</label><input
                                            type="password" name="password" placeholder="Masukkan Password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="telpon" class=" form-control-label">No Telpon</label><input
                                            type="text" name="no_hp" placeholder="Masukkan No Telpon"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="avatar" class=" form-control-label">Logo Mitra</label>
                                        <input type="file" id="avatar" name="logo_mitra"
                                            class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btn-simpan"
                                class="my-4 btn btn-primary w-100">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
@endsection

