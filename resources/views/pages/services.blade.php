@extends('master') 
@section('title', 'Services') 
@section('content')
<section class="services">
  <h3 class="section__title"></h3>

  {{-- @if (count($data) === 1) 
    <p>1 service</p>
  @else --}}
    <p>we have {{count($data)}} services</p>
    <ul class="container list"> 
      @foreach($data  as $key => $item)
        {{-- @if ($item['price'] == 0) 
          <p>This item has price 0: {{$item['title']}}</p>
        @endif --}}
        {{-- @if ($loop->first)
        <li class="item">
          <div class="item__container-img">
            <img class="item__img" src="images/icon/{{$item['image']}}.png" alt="">
          </div>
          <h4 class="item__title">{{$item['title']}}</h4>
          <p class="item__desc">{{$item['desc']}}</p>

        </li>
  
        @endif --}}
        <li class="item">
          <div class="item__container-img">
            <img class="item__img" src="images/icon/{{$item['image']}}.png" alt="">
          </div>
          <h4 class="item__title">{{$loop->iteration}}. {{$item['title']}}</h4>
          <p class="item__desc">{{$item['desc']}}</p>
        </li>

        {{-- @break($item['image'] == 'arc') --}}
      @endforeach
    </ul>
  {{-- @endif --}}


</section>
@endsection