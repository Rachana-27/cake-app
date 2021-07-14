<!-- Here all the records are read and diplayed -->


<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')

<h1 class="text-center">ALL ORDERS</h1>
<div class="container">
<table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Flavour</th>
        <th scope="col">Toppings</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total Cost</th>
        <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  
            @foreach($cakes as $cake)
            <tr>
                <th scope="row"><a href=" /cake/bill/{{$cake['orderid']}}">{{ $cake['orderid'] }}</a></th>
                <td>{{ $cake['name'] }}</td>
                <td>{{ $cake['phoneno'] }}</td>
                <td>{{ $cake['f_id'] }}</td>
                <td>{{ $cake['t_id'] }}</td>
                <td>{{ $cake['quantity'] }}</td>
                <td>${{ $cake['totalcost'] }}</td>
                <td>
                    @if($cake['completed'] == 1)
                        Completed
                    @else
                        Not Completed
                    @endif
                </td>
            </tr>
            @endforeach
  </tbody>
</table>
<button type="button" class="btn btn-warning"><a href="/home">Go back</a></button>
</div> 
@endsection