@extends('layout/main')

@section('title','Form Pendaftaran')

@section('navbar')
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>
                    <li class="menu-title">Wakaf</li>
                    <li class="active">
                        <a href="/"><i class="menu-icon fa fa-users"></i>Pendaftaran Project</a>
                    </li>
                    <li class="">
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
                        <h1>Pendaftaran Project</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="">Dashboard</a></li>
                            <li><a href="pendaftaran.html">Pendaftar</a></li>
                            <li class="active">Form Pendaftaran Project</li>
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
                    <div class="card-body">
                        <form action="insert-admin.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama" class=" form-control-label">Nama
                                            Pendaftar</label><input type="text" name="nama"
                                            placeholder="Masukkan Nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="produk" class=" form-control-label">Produk</label><input
                                            type="text" name="produk" placeholder="Masukkan Nama Produk"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="lebel" class=" form-control-label">Lebel</label>
                                        <select name="select" id="TambaSiswa" class="form-control">
                                            <option value="0">--Pilih Lebel--</option>
                                            <option value="produktif">Produktif</option>
                                            <option value="nonproduktif">Non Produktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="gambarproject" class=" form-control-label">Gambar
                                            Project</label>
                                        <input type="file" id="gambarproject" name="gambarproject"
                                            class="form-control-file">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="waktu" class=" form-control-label">Tenggang
                                            Waktu</label><input type="date" name="awaktu"
                                            placeholder="Masukkan Alamat Lengkap" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nominal" class=" form-control-label">Nominal</label><input
                                            type="number" name="nominal" placeholder="Masukkan Nominal"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="provinsi" class=" form-control-label">Pilih Provinsi</label>
                                        <select name="select" id="provinsi" class="form-control">
                                            <option value="0">--Pilih Provinsi--</option>
                                            <option value="jawa">Jawa Timur</option>
                                            <option value="jawa">Jawa Timur</option>
                                            <option value="jawa">Jawa Timur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Kabupaten" class=" form-control-label">Pilih
                                            Kabupaten</label>
                                        <select name="select" id="kabupaten" class="form-control">
                                            <option value="0">--Pilih Kabupaten--</option>
                                            <option value="jawa">Malang</option>
                                            <option value="jawa">Batu</option>
                                            <option value="jawa">Pasuruan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Status -->
                            <div class="form-group">
                                <label for="status" class=" form-control-label">Pilih
                                    Status</label>
                                <select name="select" id="status" class="form-control">
                                    <option value="0">--Pilih Status--</option>
                                    <option value="telah">Telah Disetujui</option>
                                    <option value="belum">Belum Disetujui</option>
                                </select>
                            </div>
                            <!-- Status end -->
                            <button type="submit" name="btn-simpan"
                                class="my-4 btn btn-primary w-100">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
@endsection

