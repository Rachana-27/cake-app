@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="text-center col-md-3 mt-2">
                            <a href="/item" class="btn btn-lg btn-dark "> View Items </a>
                            </div>
                            <div class="text-center col-md-3 mt-2">
                            <a href="/item/create" class="btn btn-lg btn-dark "> Add Items </a>
                            </div>
                            <div class="text-center col-md-3 mt-2 ">
                            <a href="/cake/index" class="btn btn-lg btn-dark"> New Orders </a>
                            </div>
                            <div class="text-center col-md-3 mt-2">
                            <a href="/cake/history" class="btn btn-lg btn-dark"> All Orders </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
           
        </div>
    </div>
 
    <button type="button" class="btn btn-warning"><a href="/">BACK</a></button>
</div>
@endsection
