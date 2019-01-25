@extends('master') 
@section('title', 'Work') 
@section('content')
<section class="work">
  <h3 class="section__title"></h3>
  <ul class="work__list">
    @for ($i = 0; $i < count($works); $i++) 
      <li class="item">
        <a class="item__link" href="">
          <img class="item__img" src="images/lib/dog{{$works[$i]}}.jpg" alt="">
          <div class="item__hover">
            <img class="item__hover__img" src="images/icon/look.png" alt="">
          </div>
        </a>
      </li>
      @endfor
  </ul>

  <a class="work__more" href="">Load more work</a>
</section>
@endsection