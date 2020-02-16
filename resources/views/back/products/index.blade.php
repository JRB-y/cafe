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
                    <h4 class="mb-0 font-size-18">Products</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Products</li>
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

                        <h4 class="card-title">Liste des produits</h4>
                        <p class="card-title-desc">Vous pouvez ajouter ou modifier les produits</code>.</p>
                        <a href="{{route('products.create')}}" class="btn btn-success">Nouveau Produit</a>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Categories</th>
                                <th>Image</th>
                                <th>QT</th>
                                <th>Poids</th>
                                <th>actions</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->desc}}</td>
                                        <td>
                                            <span class="badge badge-secondary">{{$product->category->name}}</span>
                                        </td>
                                        <td>
                                            <img src="{{$product->img_path}}" alt="" width="100">
                                        </td>
                                        <td>{{ $product->qt }}</td>
                                        <td>{{ $product->weight }}</td>
                                        <td>
                                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-success btn-sm">Modifier</a>
                                            <a href="{{route('products.del',  $product->id)}}" class="btn btn-danger btn-sm">Supprimer</a>
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