@extends('vendor.layouts.master')


@section('content')

<section class="section">
    <div class="section-header">
      <h1>Product : {{ $product->name }}</h1>
    
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-header-action" style="text-align: right">
                <a href="{{ route('vendor.products.index')}}" class="btn btn-primary">
                  Back
                </a>
              </div>
            </div>
            <div class="card-body">
              <form enctype="multipart/form-data" action="{{ route('vendor.product-image-gallery.store') }}" method="POST">
                @csrf
                  <div class="col-12">
                      <label>Upload Images<code>(Multiple Images Supported)</code></label><br>
                      <input type="file" name="image[]" multiple accept="image">
                      <input type="hidden" name="product" value="{{ $product->id }}">
                  </div>
                  <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
              </form> 
            </div>            
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <h1>Product Images</h1>
          <div class="card">                     
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      {{ $dataTable->table() }}
                    </div>
                </div>                
            </div>            
          </div>
        </div>
      </div>
  </section>


@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    

@endpush




