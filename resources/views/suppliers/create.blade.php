@extends('layouts.public')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add new supplier</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{route('suppliers.store')}}" method="post">
                                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-3 col-form-label">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" id="name" value="{{old('name',$supplier->name)}}" class="form-control is-invalid">
                                                <div class="invalid-feedback">
                                                    Please enter the name of the supplier
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" name="email" id="email" value="{{old('email',$supplier->email)}}" class="form-control is-invalid">
                                                <div class="invalid-feedback">
                                                    Please enter the email of the supplier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-3 col-form-label">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" name="address" id="address" value="{{old('address',$supplier->address)}}" class="form-control is-invalid">
                                                <div class="invalid-feedback">
                                                    Please enter the address of the supplier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-3 col-form-label">Phone</label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" id="phone" value="{{old('phone',$supplier->phone)}}" class="form-control is-invalid">
                                                <div class="invalid-feedback">
                                                    Please enter the phone of the supplier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="contact_person" class="col-md-3 col-form-label">Contact person</label>
                                            <div class="col-md-9">
                                                <input type="text" name="contact_person" id="contact_person" value="{{old('contact_person',$supplier->contact_person)}}" class="form-control is-invalid">
                                                <div class="invalid-feedback">
                                                    Please enter the name of the contact person
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="{{route('suppliers.index')}}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> <!-- Closing form tag -->
                        </div>

@endsection
