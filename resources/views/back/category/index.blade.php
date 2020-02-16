@extends('layouts.admin')

@section('css')
<!-- DataTables -->
<link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Categories</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

       <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Liste des catégories</h4>
                        <p class="card-title-desc">Vous pouvez ajouter ou modifier les catégories</code>.</p>
                        <a href="{{route('categories.create')}}" class="btn btn-success">Nouvelle Catégorie</a>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>actions</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->desc}}</td>
                                        <td>
                                            <img src="{{$category->img_path}}" alt="" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-success btn-sm">Modifier</a>
                                            <a href="{{route('categories.del',  $category->id)}}" class="btn btn-danger btn-sm">Supprimer</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> 
            <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection

@section('js')
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/pages/datatables.init.js"></script>   
@endsection