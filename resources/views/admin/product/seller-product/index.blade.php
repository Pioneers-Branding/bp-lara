@extends('admin.layouts.master')


@section('content')

<section class="section">
    <div class="section-header">
      <h1>All Seller Product</h1>
    
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Seller Product</h4>
              
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
            
          </div>
        </div>
      </div>
  </section>


@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}



    <script>

      $(document).ready(function(){
    
        $('body').on('click', '.change-status', function(){   
          
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
    
            let isChecked = $(this).is(':checked');
            let id = $(this).data('id');            
          
            $.ajax({
    
              url : "{{ route('admin.products.change-status') }}",
              method : 'PUT',
              
              data : {
                status : isChecked,
                id : id
              },
    
              success: function(data){
                 toastr.success(data.message);
              },
              error: function(xhr, status, error){
                 console.log(error);
              }   
    
            });
    
        });

        $('body').on('change', '.is-approved', function(){   
          
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
    
            let value = $(this).val();
            let id = $(this).data('id');            
          
            $.ajax({
    
              url : "{{ route('admin.change-approved-status') }}",
              method : 'PUT',
              
              data : {
                value : value,
                id : id
              },
    
              success: function(data){
                 toastr.success(data.message);
                 window.location.reload();
              },
              error: function(xhr, status, error){
                 console.log(error);
              }   
    
            });
    
        });
    
      });
    
    </script> 
@endpush

