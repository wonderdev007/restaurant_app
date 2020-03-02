@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Food Category</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All Food Categories</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food Category</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->


                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit category</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/food-categories/{{$category->id}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputCategoryName">Category Name</label>
                                            <input id="inputCategoryName" type="text" placeholder="Enter category name" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $category->title) }}" required autocomplete="title" autofocus>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="inputCategoryDescription">Description</label>
                                            <textarea id="inputCategoryDescription" type="text" rows="5" placeholder="Enter category description" class="form-control @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description" autofocus>{{ old('description', $category->description) }}</textarea>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCategoryImageUrl">Category Image Url</label>
                                            <input id="inputCategoryImageUrl" type="text" placeholder="/img/bugers.jpg" class="form-control @error('image_url') is-invalid @enderror" name="image_url" value="{{ old('image_url', $category->image_url) }}" required autocomplete="image_url" autofocus>

                                            @error('image_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pl-3">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
@endsection
