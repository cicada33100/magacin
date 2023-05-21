@extends('layouts.public')
@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Product details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">Product name</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$product->name}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Product category</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$product->category->name}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">Price per unit</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$product->price}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Quantity in storage</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$product->quantity}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$product->description}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-info">Edit</a>
                        {{-- <a href="{{route('products.destroy',$product->id)}}" class="btn btn-outline-danger">Delete</a> --}}
                        <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection