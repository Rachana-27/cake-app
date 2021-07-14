
<!-- Here {id} is the id of record to be read from DB -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.layout')

<!-- Access to only body part of layout file -->
@section('content')
<div class="container ">
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-dark text-white">BILL</div>
                <div class="card-body text-center">
                <div class="card text-white bg-dark mb-3" >
             

                            <p>***********************************</p>
                            <p class="id">Order - {{ $order->orderid}}</p>
                            <p>~~~~~~~~~~~~~~~~~~~~~~~~</p>
                            <p class="name">Customer - {{ $order->name }}</p>
                            <p>~~~~~~~~~~~~~~~~~~~~~~~~</p>
                            <p class="phoneno">Phone Number - {{ $order->phoneno }}</p>
                            <p>~~~~~~~~~~~~~~~~~~~~~~~~</p>
                            <p class="item">Flavour - {{ $flavour->itemname }}</p>
                            <p>~~~~~~~~~~~~~~~~~~~~~~~~</p>
                            <p class="item">Toppings - {{ $topping->itemname }}</p>
                            <p>~~~~~~~~~~~~~~~~~~~~~~~~</p>
                            <p class="item">Quantity - {{ $order->quantity }}</p>
                            <p>~~~~~~~~~~~~~~~~~~~~~~~~</p>
                            <p class="item">Total Cost - {{ $order->totalcost }}</p>
                            <p>***********************************</p>
                                     
                </div>               
                </div>
                
            </div>
            <br>
            <button class="btn btn-lg btn-dark" onClick="window.print()">Print</button>  
        </div>
    </div>
    <button type="button" class="btn btn-warning"><a href="/home">Go back</a></button>
</div>
@endsection