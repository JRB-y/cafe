@extends('layouts.admin')

@section('css')
<!-- DROPZONE -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css"/> --}}
<!-- Plugins css -->
<link href="/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nouvelle Catégorie</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Nouvelle catégorie</li>
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

                        <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" placeholder="Nom de catégorie" id="example-text-input" name="name" value="{{$category->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="example-text-input" name="desc">{{$category->desc}}"</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label" value="{{$category->name}}">Image</label>
                                <div class="col-md-10">
                                   <input name="img_path" type="file" multiple="multiple">
                                </div>
                            </div>

                            <div class="form-group row" style="float: right;">
                                <input type="submit" class="btn btn-success"  style="margin-right: 10px;" value="Enregistrer">
                                <input type="reset"  class="btn btn-secondary" style="margin-right: 10px;" value="Annuler">
                            </div>

                        </form>


                    </div>
                </div>
            </div> 
            <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection

@section('js')
    <!-- Plugins js -->
    <script src="/assets/libs/dropzone/min/dropzone.min.js"></script>

@endsection