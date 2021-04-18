@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Results For Products</h4>
            @foreach($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                   <a href="detail/{{$item->id}}">
                        <img class="tranding-img" src="{{$item->gallery}}" >
                    </a>
                </div>
                <div class="col-sm-3">
                    <div class="">
                        <h5>{{$item->name}}</h5>
                        <p>{{$item->description}}</p>
                    </div>
                   </div>
                   <div class="col-sm-3">
                        <button class="btn btn-primary">Remove From Cart</button>
                   </div>
                </div>
            @endforeach
        </div>    
    </div></div>
@endsection