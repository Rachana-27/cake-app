@extends('layouts.app')

@section('content')
<h1 class="text-center">ALL ITEMS</h1>
<div class="container">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">PRICE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
     @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['itemname'] }}</td>
                <td>{{ $item['itemcategory'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td><form action="/item/delete/{{ $item['id']}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger">DELETE</button>
                </form></td>
            </tr>
            @endforeach
  </tbody>
</table>
<button type="button" class="btn btn-warning"><a href="/home">Go back</a></button>
</div> 
@endsection