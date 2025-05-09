@extends('admin.layouts.master')


@section('content')

<section class="section">
    <div class="section-header">
      <h1>Product Variants Items</h1>
    
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>Create Variant Item</h4> 
                <div class="card-header-action">
                  <a href="#" class="btn btn-primary">
                    Back
                  </a>
                </div>               
              </div>            
          </div>
        </div>        
      </div>
      <form action="{{ route('admin.products-variant-items.update', $variantItem->id) }}" enctype="multipart/form-data" method="POST"> 
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Variant Name</label>
              <input type="text" class="form-control" name="variant_name" value="{{ $variantItem->ProductVariant->name }}" readonly>
            </div>
          </div> 
          
          <div class="col-12">
            <div class="form-group">
              <label>Item Name</label>
              <input type="text" class="form-control" name="name" value="{{ $variantItem->name }}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Price<code>(set 0 for make it free)</code></label>
              <input type="text" class="form-control" name="price" value="{{ $variantItem->price }}">
            </div>
          </div>    
          <div class="col-12">
            <div class="form-group">
              <label>Is Default</label>
              <select class="form-control form-control-lg" name="is_default">
                <option {{ $variantItem->is_default == 1 ? 'selected' : '' }} value="1">Yes</option>
                <option {{ $variantItem->is_default == 0 ? 'selected' : '' }} value="0">No</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Status</label>
              <select class="form-control form-control-lg" name="status">
                <option {{ $variantItem->status == 1 ? 'selected' : '' }} value="1">Active</option>
                <option {{ $variantItem->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
      
  </section>


@endsection