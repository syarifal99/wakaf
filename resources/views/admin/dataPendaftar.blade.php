@extends('layout/main')

@section('title','Pendaftaran Project')

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
                            <li class="active">Pendaftaran project</li>
                            <li><a href="pendaftaran-insert.html">Form Pendaftar Project</a></li>
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
                <a href="pendaftaran-insert.html" class="btn btn-success mb-4"><i
                    class="ti-plus"></i>Tambahkan Data</a>
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Pendaftaran project</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr >
                                    
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Lebel</th>
                                    <th>Gambar</th>
                                    <th>Nominal</th>
                                    <th>Tenggang Waktu</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td>Nasyithul Ibad</td>
                                    <td>Sembako</td>
                                    <td>Barang</td>
                                    <td>Barang.jpg</td>
                                    <td>15.000</td>
                                    <td>12/04/2020</td>
                                    <td>Gresik</td>
                                    <td>Selesai</td>
                                    <td>
                                        <a href="pendaftaran-insert.html" class="btn btn-primary ti-cloud-down"></a>
                                        <a href="pendaftaran-insert.html" class="btn btn-success fa fa-pencil"></a>
                                        <a href="pendaftaran-insert.html" class="btn btn-danger fa fa-trash-o"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rizki Xavier</td>
                                    <td>Sembako</td>
                                    <td>Barang</td>
                                    <td>Barang.jpg</td>
                                    <td>15.000</td>
                                    <td>12/04/2020</td>
                                    <td>Gresik</td>
                                    <td>Selesai</td>
                                    <td>
                                        <a href="pendaftaran-insert.html" class="btn btn-primary ti-cloud-down"></a>
                                        <a href="pendaftaran-insert.html" class="btn btn-success fa fa-pencil"></a>
                                        <a href="pendaftaran-insert.html" class="btn btn-danger fa fa-trash-o"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dewa Rizki</td>
                                    <td>Sembako</td>
                                    <td>Barang</td>
                                    <td>Barang.jpg</td>
                                    <td>15.000</td>
                                    <td>12/04/2020</td>
                                    <td>Gresik</td>
                                    <td>Selesai</td>
                                    <td>
                                        <a href="pendaftaran-insert.html" class="btn btn-primary ti-cloud-down"></a>
                                        <a href="pendaftaran-insert.html" class="btn btn-success fa fa-pencil"></a>
                                        <a href="pendaftaran-insert.html" class="btn btn-danger fa fa-trash-o"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
@endsection

