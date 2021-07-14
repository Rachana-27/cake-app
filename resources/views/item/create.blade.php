@extends('layouts.app')

@section('content')
<div class="card-body p-4">
  <h1 class="text-center">ADD ITEMS</h1><br/>
  <div class="additem">
  <form action="/item" method="POST">
    @csrf
    <label for="itemname">ITEM TO BE ADDED:</label>
    <input type="text" name="itemname" id="itemname" required>
    <label for="itemcategory">CHOOSE THE CATEGORY:</label>
    <select name="itemcategory" id="itemcategory">
      <option value="flavour">Flavour</option>
      <option value="topping">Topping</option>
    </select>
    <label for="price">PRICE:</label>
    <input type="text" name="price" id="price" required>
    <input type="submit" value="Add Item">
  </form>
</div>
<button type="button" class="btn btn-warning"><a href="/home">Go back</a></button> 
</div>

@endsection