<!-- Here all the records are read and diplayed -->
<!-- Route used is /ramen -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')

<h1 class="text-center">NEW ORDERS</h1>
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
        <th scope="col">Complete it</th>
    </tr>
  </thead>
  <tbody>
     @foreach($cakes as $cake)
            <tr>
                <th scope="row">{{ $cake['orderid'] }}</th>
                <td><a href="/cake/bill/{{$cake['orderid']}}">{{ $cake['name'] }}</a></td>
                <td>{{ $cake['phoneno'] }}</td>
                <td>{{ $cake['f_id'] }}</td>
                <td>{{ $cake['t_id'] }}</td>
                <td>{{ $cake['quantity'] }}</td>
                <td>${{ $cake['totalcost'] }}</td>
                <td><form action="/cake/completed/{{$cake['orderid']}}" method="POST">
                    @csrf 
                    <button class="btn btn-success">Complete</button>
                </form></td>
            </tr>
            @endforeach
  </tbody>
</table>
<button type="button" class="btn btn-warning"><a href="/home">Go back</a></button>
</div> 
@endsection