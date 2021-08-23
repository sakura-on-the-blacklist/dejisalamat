@extends('layouts.frame')

@section('content')
    <div class="banner"><img class="mySlides" src="/img/P-1.png" /></div>
    <div class="banner"><img class="mySlides" src="img/P-2.png" /></div>
    <div class="banner"><img class="mySlides" src="img/P-3.png" /></div>
    <script src="{{ asset('js/banner.js')}}"></script>
    <div class="hero-hero">
    <div class="detail-hero">
      <div class="title-box">
        <div class="location-title">タイトル</div>
        <div class="location-reservation">
          <div class="location-reserve">予約</div>
          <div class="location-bookmark">お気に入り</div>
          <div class="location-rating">星</div>
        </div>
      </div>
      <div class="detail-image">
        <img src="./img/oslob.jpeg" alt="" />
        <img src="./img/oslob.jpeg" alt="" />
        <img src="./img/oslob.jpeg" alt="" />
        <img src="./img/oslob.jpeg" alt="" />
      </div>
      <div class="schedule-explanation">
        <div class="schedule"> 
          <div class="schedule-title">schedule</div>
          <ul>
            <li>time1</li>
            <li>time2</li>
            <li>time3</li>
          </ul>
        </div>
        <div class="place-price">
          <div class="place-name">場所</div>
          <div class="place-price">料金</div>
        </div>
      </div>
      <div class="place-explanation">
        <div class="place-explanation-title">説明</div>
        <div class="place-explanation-paragraph">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aliquid
          commodi, eaque mollitia provident quas corrupti saepe cum fugiat
          dolores, accusamus exercitationem odio, iusto nesciunt!
        </div>
      </div>
      <div class="place-review">
        <div class="place-review-title">口コミ</div>
        <div class="place-reivew-edit">edit</div>
        <div class="place-review-delete">delete</div>
    </div>
    </div>
</div>
    

@endsection