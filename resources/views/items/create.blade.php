@extends('layouts.main')

@section('title', 'Add new items')

@section('content')
<section class="content py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Add new items</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{route('items.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Item name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="categories">Categories</label>
                                <input type="text" class="form-control @error('categories') is-invalid @enderror" id="categories" name="categories" placeholder="Category" value="{{ old('categories') }}">
                                 @error('categories')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror

                              </div>
                              <div class="form-group">
                                <label for="weight">weight in gr</label>
                                <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" placeholder="1" value="{{ old('weight') }}">
                                 @error('weight')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror

                              </div>
                              <div class="form-group">
                                <label for="price">price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="1.00" value="{{ old('price') }}">
                                 @error('price')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                 @error('description')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{route('items.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
