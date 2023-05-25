@extends('layouts.public')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>supplier details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">supplier name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$supplier->name}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">Supplier email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$supplier->email}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">supplier address</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$supplier->address}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">supplier website</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$supplier->website}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">supplier phone</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$supplier->phone}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">supplier contact person</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$supplier->contact_person}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-info">Edit</a>
                                            {{-- <a href="{{route('suppliers.destroy',$supplier->id)}}" class="btn btn-outline-danger">Delete</a> --}}
                                            <a href="{{route('suppliers.index')}}" class="btn btn-outline-secondary">Cancel</a>
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
