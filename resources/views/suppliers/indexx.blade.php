@extends('layouts.public')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Suppliers</h2>
                                <div class="ml-auto">
                                    <a href="{{ route('suppliers.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Create new Supplier</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($msg = session('message'))
                                <div class="alert alert-success">{{ $msg }}</div>
                            @endif
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Supplier name</th>
                                    <th scope="col">Website</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <th scope="row">{{ $supplier->id }}</th>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->website }}</td>
                                        <td>
                                            <a href="{{route('suppliers.show',$supplier->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                            <form action="{{route('suppliers.destroy',$supplier->id)}}" method="post" onsubmit="confirm('Are you sure?')" style="display:inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <nav class="mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
