@extends('layouts.app')

@section('content')
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="jumbotron text-center">
                    <h1>POS APPLICATION</h1>
                    <p><a class="btn btn-primary btn-lg" href="/pos/1" role="button">CASHIER #1</a> <a class="btn btn-primary btn-lg" href="/clerk/second/2" role="button">CASHIER #2</a> <a class="btn btn-primary btn-lg" href="/clerk/third/3" role="button">CASHIER #3</a><p>
                        
                </div>      
            </div>
            <div class="col-md-3"></div>
        </div>
@endsection