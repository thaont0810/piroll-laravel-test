@extends('master') 
@section('title', 'Work')

@section('content')
<section class="work">
  <h3 class="section__title"></h3>
  <ul class="work__list">
    @foreach ($works as $item)
      <li class="item">
        <a class="item__link" href="">
            <img class="item__img" src="images/lib/dog{{$item}}.jpg" alt="">
            <div class="item__hover">
              <img class="item__hover__img" src="images/icon/look.png" alt="">
            </div>
          </a>
      </li>
    @endforeach
  </ul>

  <a class="work__more" href="">Load more work</a>
</section>
@endsection