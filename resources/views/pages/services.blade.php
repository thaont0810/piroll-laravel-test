@extends('master') 
@section('title', 'Services')

@section('content')
<section class="services">
  <h3 class="section__title"></h3>
  <ul class="container list">
    @foreach($data as $item)
      <li class="item">
        <div class="item__container-img">
          <img class="item__img" src="images/icon/{{$item['image']}}.png" alt="">
        </div>

        <h4 class="item__title">{{$item['title']}}</h4>
        <p class="item__desc">{{$item['desc']}}</p>
      </li>
     @endforeach 
  </ul>
</section>
@endsection