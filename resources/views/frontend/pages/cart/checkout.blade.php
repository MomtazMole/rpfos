@extends('frontend.master')

@section('content')

<div class="container wrapper">
    <form action="{{route('order.place')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 col-md-pull-8 col-sm-pull-6">
                <!--SHIPPING-->
                <div class="panel panel-info">

                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Shipping Address</h4>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-12"><strong>Name:</strong></div>
                            <div class="col-md-12"><input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" /></div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-12"><strong>Phone Number:</strong></div>
                            <div class="col-md-12"><input type="number" name="phone_number" class="form-control" value="" /></div>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-12"><strong>Email Address:</strong></div>
                            <div class="col-md-12"><input type="text" name="email" class="form-control" value="{{auth()->user()->email}}" /></div>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-12"><strong>Order_note:</strong></div>
                            <div class="col-md-12"><input type="text" name="order_note" class="form-control" value="" /></div>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-12"><strong>payment method:</strong></div>
                            <div class="col-md-12"><select class="form-control" name="payment_method">
                                    <option>Payment Method</option>
                                    <option value="COD">Cash on delivery</option>
                                    <option value="PO">Pay Online</option>
                                </select></div>
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@endsection