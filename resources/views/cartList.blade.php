@extends('master')
@section('content')
<div class="custom-project">
    <div class="class-sm-10">
        <div class="trending-wrapper">
            <h4>Reasults of Products</h4>
            @foreach($products as $item)
            <div class="tranding-item">
                <a href="detail/{{$item->id}}">
                    <img class="tranding-img" src="{{$item['gallery']}}" alt="Los Angeles">
                    <div class="">
                        <h5>{{$item->name}}</h5> 
                        <h5>{{$item->description}}</h5>           
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>