@extends('master')
@section('content')
<div class="container custom-product mt-5">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
     <a href="detail/{{$item['id']}}">
     <img class="img-slider text-align-center" src="{{$item['gallery']}}" alt="Los Angeles">
      <div class="carousel-caption">
        <h2>{{$item['name ']}}</h2>
        <h4>{{$item['price']}}</h4>
        <p>{{$item['description']}}</p>
      </div>
     </a>
    </div>

    @endforeach
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
<div class="container treanding-wrapper">
  <h3 class="text-center mb-5">Tranding Products</h3>
  @foreach($products as $item)
    <div class="tranding-item">
    <a href="detail/{{$item['id']}}">
      <img class="tranding-img" src="{{$item['gallery']}}" alt="Los Angeles">
      <div class="">
        <h5>{{$item['name']}}</h5>
        
        
      </div>
      </a>
    </div>
    @endforeach
</div>
@endsection



