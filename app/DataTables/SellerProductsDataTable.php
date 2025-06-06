<?php

namespace App\DataTables;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SellerProductsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))            
            ->addColumn('action', function($query){
            $editBtn = '<a href="'.route('admin.product.edit', $query->id).'" class="btn btn-primary text-white"><i class="far fa-edit"></i></a>' ;
            $deleteBtn = '<a href="'.route('admin.product.destroy', $query->id).'" class="btn btn-danger text-white ml-2 delete-item"><i class="far fa-trash-alt"></i></a>' ;
            $moreBtn = '<button class="btn btn-primary dropdown-toggle ml-2" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cog"></i>
            </button>
                      
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item has-icon" href=" '. route('admin.product-image-gallery.index', ['product' => $query->id]) .' "><i class="far fa-heart"></i> Image Gallery</a>
            <a class="dropdown-item has-icon" href=" '.route('admin.products-variant.index' , ['product' => $query->id]).' "><i class="far fa-file"></i> Variants</a>
            </div>';

              return $editBtn.$deleteBtn.$moreBtn;
            })
            ->addColumn('thumb_img', function($query){
                return "<img width='100px' src='".asset($query->thumb_img)."'></img> ";
            })
            ->addColumn('product_type', function($query){
                switch($query->product_type){
                    case 'new_arrival';
                    return "<i class='badge badge-success'>New Arrival</i>";

                    case 'best_product';
                    return "<i class='badge badge-waring'>Best Product</i>";

                    case 'top_product';
                    return "<i class='badge badge-danger'>Top Product</i>";

                    case 'featured';
                    return "<i class='badge badge-info'>Featured</i>";

                    default:
                    return "<i class='badge badge-dark'>None</i>";
                }
            })
            ->addColumn('status', function($query){
                if($query->status == 1){
                   $button = '<label class="custom-switch mt-2">
                        <input type="checkbox" checked name="custom-switch-checkbox" data-id=" '.$query->id.' " class="custom-switch-input change-status">
                        <span class="custom-switch-indicator"></span>
                    </label>';
                }else{
                    $button = '<label class="custom-switch mt-2">
                        <input type="checkbox" name="custom-switch-checkbox" data-id=" '.$query->id.' " class="custom-switch-input change-status">
                        <span class="custom-switch-indicator"></span>
                    </label>';
                }
                return $button;
                
            })
            ->addColumn('approve', function($query){
                return '<select class="is-approved form-control" data-id=" '.$query->id .'">
                    <option  class="form-control" value="0">Pending</option>
                    <option selected class="form-control" value="1">Approved</option>
                </select>';
            })
            ->addColumn('vendor', function($query){
                return $query->vendor->shop_name;
            })
            ->rawColumns(['action', 'thumb_img', 'product_type','status', 'vendor','approve'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Product $model): QueryBuilder
    {
        return $model->where('vendor_id', '!=',  Auth::user()->vendor->id)->where('is_approved', 1)->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('sellerproducts-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('vendor'),
            Column::make('name'),
            Column::make('price'),
            Column::make('thumb_img'),
            Column::make('product_type'),
            Column::make('status'),
            Column::make('approve')->width(150),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(200)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'SellerProducts_' . date('YmdHis');
    }
}
