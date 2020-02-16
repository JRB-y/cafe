@extends('layouts.admin')

@section('css')
<!-- DROPZONE -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css"/> --}}
<!-- Plugins css -->
<link href="/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .select2{
        width: 100% !important;
    }
</style>

@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nouveau Produit</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Nouveau Produit</li>
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
                        {{-- <p class="card-title-desc">Vous pouvez ajouter ou modifier les produits</code>.</p> --}}

                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" placeholder="Nom du produit" id="example-text-input" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="example-text-input" name="desc"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Image</label>
                                <div class="col-md-10">
                                   <input name="img_path" type="file" multiple="multiple">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Quantité</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" step="0.1" placeholder="Quantité" id="example-text-input" name="qt">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Poids</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" placeholder="Poids" id="example-text-input" name="weight">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Prix</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" step="0.1" placeholder="Prix" id="example-text-input" name="price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Categories</label>
                                <div class="col-md-10">
                                    <select class="js-example-basic-single" name="category_id">
                                        @foreach(App\Category::all() as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
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
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>

@endsection