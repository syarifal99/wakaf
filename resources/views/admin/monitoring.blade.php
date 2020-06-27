@extends('layout/main')

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
                    <li class="">
                        <a href="/mitra-pendaftaran"><i class="menu-icon fa fa-file-text-o"></i>Pendaftaran Mitra</a>
                    </li>
                    <li class="active">
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
                        <h1>Monitoring Data Nazhir</h1>
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
                        <strong class="card-title">Monitoring Data Nazhir</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr >
                                    
                                    <th>Nama Mitra</th>
                                    <th>Data Project</th>
                                    <th>Progress Preject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>
                                        <a  href="#" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Lorem ipsu</td>
                                    <td> Lorem ipsu</td>
                                    <td>
                                        <a  href="#" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Lorem ipsu</td>
                                    <td> Lorem ipsu</td>
                                    <td>
                                        <a  href="#" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
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

