@extends('layoutt/main')

@section('title','Pendaftaran Mitra')

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
                                <li class="active">Data Mitra</li>
                                <li><a href="">Form Pendaftaran Mitra</a></li>
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
                    <a href="/TambahMitra" class="btn btn-success mb-4"><i class="ti-plus"></i> Tambah Mitra </a>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Mitra</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Mitra</th>
                                            <th>Email</th>
                                            <th>No.Hp</th>
                                            <th>No.Rek</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gambar as $dm)
                                        <tr>
                                            <td>  <span class="name">{{ $dm->nm_mitra}}</span> </td>
                                            <td> <span class="email">{{ $dm->email}}</span> </td>
                                            <td> <span class="no_hp">{{ $dm->no_hp}}</span> </td>
                                            <td> <span class="no_rek">{{ $dm->no_rek}}</span> </td>
                                            <td> 
                                                <button type="button" class="btn btn-primary btn-sm fa fa-info" data-toggle="modal" data-target="#modalDetail" action="{{$dm->id_mitra}}"></button>
                                                <a class="btn btn-success btn-sm fa fa-edit" href="/Mitra/edit/{{ $dm->id_mitra }}"></a>
                                                <a class="btn btn-danger btn-sm fa fa-eraser" href="/Mitra/hapus/{{ $dm->id_mitra }}"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
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

<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fa fa-user"></i><strong class="card-title pl-2">Detail Data Mitra</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" style="width:200px; height:200px;" src="{{ url('/data_file/'.$dm->logo_mitra) }}" alt="Card image cap">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="text-sm-center mt-2 mb-1 card-title pl-2"><strong class="card-title pl-2">{{ $dm->nm_mitra }}</strong> </h5>
                            </li>
                            <li class="list-group-item">
                                <h5>Penanggungjawab :  {{ $dm->nm_pjmitra }}</h5>
                            </li>
                            <li class="list-group-item">
                                <h5>No. Rekening :   {{ $dm->no_rek }}</h5>
                            </li>
                            <li class="list-group-item">
                                <h5>Username : {{ $dm->username }}</h5>
                            </li>
                            <li class="list-group-item">
                                <h5>Email : {{ $dm->email }}</h5>
                            </li>
                            <li class="list-group-item">
                                <h5>No. Hp : {{ $dm->no_hp }}</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
