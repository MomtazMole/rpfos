@extends('backend.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">Total Orders</div>
                    <div class="card-body">{{$orders}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('Order.list')}}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                </div>
            </div>
          
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Total Users</div>
                    <div class="card-body">{{$user}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('Admin_List')}}">Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">Total Menu</div>
                    <div class="card-body">{{$menu}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('Menu.list')}}">view details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <svg class="svg-inline--fa fa-table me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                </svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                OrderTable
            </div>
            <div class="card-body">
                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                    <div class="datatable-top">


                    </div>
                    <div class="datatable-container">
                        <table id="datatablesSimple" class="datatable-table">
                            <thead>
                                <tr>
                                    <th data-sortable="true" style="width: 30.334728033472803%;"><a href="#" class="datatable-sorter col">ID</a></th>
                                    <th data-sortable="true" style="width: 19.351464435146443%;"><a href="#" class="datatable-sorter col">Name</a></th>
                                    <th data-sortable="true" style="width: 14.435146443514643%;"><a href="#" class="datatable-sorter col">Amount</a></th>
                                    <th data-sortable="true" style="width: 14.435146443514643%;"><a href="#" class="datatable-sorter col">Payment_status</a></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $item)
                                <tr>
                                    <td scope="row">{{$item->id}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->total_price}}.BDT</td>
                                    <td>{{$item->payment_status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$order->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection