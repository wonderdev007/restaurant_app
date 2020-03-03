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
                            <h2 class="pageheader-title">Create Food Item</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Create Food Item</li>
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
                                <h5 class="card-header">Create new item</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/food-items">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputItemName">Item Name</label>
                                            <input id="inputItemName" type="text" placeholder="Enter item name" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="inputItemPrice">Item Price</label>
                                            <input id="inputItemPrice" type="text" rows="5" placeholder="Enter item price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="input-category">Select Category</label>
                                            <select class="form-control" id="input-category" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value={{ $category->id}}>
                                                        {{ $category->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputItemImageUrl">Image Url</label>
                                            <input id="inputItemImageUrl" type="text" placeholder="Enter item url image" class="form-control @error('image_url') is-invalid @enderror" name="image_url" value="{{ old('image_url') }}" autocomplete="image_url" autofocus>

                                            @error('image_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="inputItemDescription">Description</label>
                                            <textarea id="inputItemDescription" type="text" rows="5" placeholder="Enter item ingredients" class="form-control @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description" autofocus>{{ old('description') }}</textarea>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 pl-3">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">CREATE ITEM</button>
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
