<div class="row">
    <div class="col-md-12">
      <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label">Name</label>
        <div class="col-md-9">
          <input type="text" name="name" id="name" value="{{old('name',$product->name)}}" class="form-control is-invalid">
          <div class="invalid-feedback">
            Please enter name of your product
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="description" class="col-md-3 col-form-label">Description</label>
        <div class="col-md-9">
          <input type="text" name="description" id="description" value="{{old('description',$product->description)}}" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label for="number" class="col-md-3 col-form-label">Quantity</label>
        <div class="col-md-9">
          <input type="number" name="quantity" id="quantity" value="{{old('quantity',$product->quantity)}}" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label for="number" class="col-md-3 col-form-label">Price per unit</label>
        <div class="col-md-9">
          <input type="number" name="price" id="price" value="{{old('price',$product->price)}}" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="categories_id" class="col-md-3 col-form-label">Category</label>
        <div class="col-md-9">
            <select class="form-control" id="categories_id" value="{{old('categories_id',$product->categories_id)}}" name="categories_id">
                <option value="" selected>Select category</option>
               @foreach ($categories as $category)
               <option value="{{$category->id}}">{{$category->name}}</option> 
               @endforeach
            </select>
        </div>
      </div>
      <hr>
      <div class="form-group row mb-0">
        <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Cancel</a>
        </div>
      </div>
    </div>
  </div>