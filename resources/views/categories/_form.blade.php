<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" id="name" value="{{--{{old('name',$category->name)}}--}}" class="form-control is-invalid">
                <div class="invalid-feedback">
                    Please enter name of category
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-3 col-form-label">Description</label>
            <div class="col-md-9">
                <input type="text" name="description" id="description" value="{{--{{old('description',$category->description)}}--}}" class="form-control">
            </div>
        </div>
        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('categories.index')}}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>
