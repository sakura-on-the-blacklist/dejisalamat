<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/comment.css')}}">
    
    <title>Document</title>
</head>
<body>

       <form action="{{ route('comment.store',$event->id)}}"  method="POST">
        @csrf
        <h5>みんなの口コミ</h5>
        <div class="center">
            <div class="box1">
                <div class="text-card">
                    <div class="plan-name">
                        <img src="" alt="">
                        <div class="box2">
                            <div class="event-image"></div>
                            <label class="space1">{{$event->title}}</label>
                        </div>
                    </div>
                    <div class="star">
                        <label>満足度</label>
                        <div class="rating">
                            <input class="rating__input hidden--visually" type="radio" id="5-star" name="rating" value="5" required />
                            <label class="rating__label" for="5-star" title="星5つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星5つ</span></label>
                            <input class="rating__input hidden--visually" type="radio" id="4-star" name="rating" value="4" />
                            <label class="rating__label" for="4-star" title="星4つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星4つ</span></label>
                            <input class="rating__input hidden--visually" type="radio" id="3-star" name="rating" value="3" />
                            <label class="rating__label" for="3-star" title="星3つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星3つ</span></label>
                            <input class="rating__input hidden--visually" type="radio" id="2-star" name="rating" value="2" />
                            <label class="rating__label" for="2-star" title="星2つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星2つ</span></label>
                            <input class="rating__input hidden--visually" type="radio" id="1-star" name="rating" value="1" />
                            <label class="rating__label" for="1-star" title="星1つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星1つ</span></label>
                          </div>
                    <div class="text-card">
                        <div>口コミ本文</div>
                        <textarea class="text-review" name="text" cols="30" rows="10"></textarea>
                    </div>
                      <div class="space2">
                          <p class="size1">※投稿すると会員登録時に設定されたお名前が表示されます</p>
                      <div class="button02">
                          <input type="submit" value="投稿する">
                      </div>
                    </div>
           </form>
        </div>
</body>
</html>