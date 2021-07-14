@extends('layouts.layout')

@section('content')
<div class=" createitem">
  <h1 class='text-center'>PLACE  ORDER!!</h1>
  <form action="/cake" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <label for="phoneno">Phoneno</label>
    <input type="text" name="phoneno" id="phoneno" required>
    <br>
    <div class="form-group row">
          <label class="fllabel" for="flavour">Flavour</label>
              <div class="col-sm-6">
                <select class="custom-select my-2 mr-sm-2" name="flavour" id="flavour">
                  @foreach($item as $f)
                    <option value="{{ $f['id'] }}">{{ $f['itemname'] }}, {{ $f['price'] }}, {{$f ['itemcategory']}}</option>
                  @endforeach
                </select>
              </div>
          </div>
       
          <div class="form-group row">
                        <label class="toppin" for="topping">Topping</label>
                        <div class="col-sm-6">
                        <select class="custom-select my-2 mr-sm-2" name="topping" id="topping">
                            @foreach($item as $t)
                            <option value="{{ $t['id'] }}">{{ $t['itemname'] }}, {{ $t['price'] }}, {{$t['itemcategory']}}</option>
                            @endforeach
                        </select>
                        </div>        
                    </div>
                   
    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" min="5" max="10"> 
    <br>
   
    <input type="submit" value="Order Cake">
  </form>
  
</div>
@endsection