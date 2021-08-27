@extends('layouts.frame')

@section('content')
<body>
  <div class="banner"><img class="mySlides" src="/img/P-1.png" /></div>
    <div class="banner"><img class="mySlides" src="/img/P-2.png" /></div>
    <div class="banner"><img class="mySlides" src="/img/P-3.png" /></div>
    <script src="{{ asset('js/banner.js')}}"></script>
    @foreach ($events as $event)
    <div class="hero-hero">
    <div class="detail-hero">
      <div class="title-box">
        <div class="location-title">{{$event->title}}</div>
        <div class="location-reservation">
          <div class="location-reserve">このプランを予約する</div>
          <div class="location-bookmark">お気に入りに登録する</div>
          <div class="location-rating">{{$event->rating}}</div>
        </div>
      </div>
      <div class="detail-image">
        <img src="./img/oslob.jpeg" alt="" />
        <img src="./img/oslob.jpeg" alt="" />
        <img src="./img/oslob.jpeg" alt="" />
        <img src="./img/oslob.jpeg" alt="" />
      </div>
      <div class="schedule-explanation">
        <div class="schedule1">
          <div class="schedule"> 
            <div class="schedule-title">スケジュール</div>
            <div class="time">
              <ul>
                  <li>{{$schedule->time}}</li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="place-nameprice">
            <div class="place-name">場所:{{$event->place}}</div>
            <div class="place-price">料金:{{$event->price}}</div>
          </div>
        </div>
        <div class="place-explanation">
          <div class="place-explanation-title">説明</div>
          <div class="place-explanation-paragraph"><p>{{$event->description}}</p>
          </div>
        </div>
      </div>
      <div class="place-review">
        <div class="place-review-title">口コミ</div>
        <div class="place-review1">
          <div class="place-reivew-edit">edit</div>
          <div class="place-review-delete">delete</div>
        </div>
    </div>
    </div>
</div>

@endsection
