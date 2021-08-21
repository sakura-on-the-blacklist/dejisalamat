@extends('layouts.frame')

@section('content')
    <div class="banner"><img class="mySlides" src="/img/O-1.png" /></div>
    <div class="banner"><img class="mySlides" src="img/O-2.png" /></div>
    <div class="banner"><img class="mySlides" src="img/O-3.png" /></div>
    <script src="{{ asset('js/banner.js') }}"></script>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>予約フォーム</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body class="utina-">
        <div class="Form">
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">お名前</p>
            <input type="name" class="Form-Item-Input" >
        </div>
        <br>
        <br>

        <div class="Form-Item">
            <p class="Form-Item-Label">電話番号</p>
            <input type="tel" class="Form-Item-Input" >
        </div>
        <br>
        <br>
        <div class="Form-Item">
            <p class="Form-Item-Label">予約プラン名</p>
            <input type="reserve" class="Form-Item-Input" >
        </div>
        <br>
        <br>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                希望日時
            </p>
            <div class="Form-Item-Input1">
                <input type="text" class="Form-Item-Input" placeholder="第一希望">
                <input type="text" class="Form-Item-Input" placeholder="第二希望">
                <input type="text" class="Form-Item-Input" placeholder="第三希望">
            </div>
        </div>
        <br>
        <br>

        <div class="Form-Item">
            <p class="Form-Item-Label isMsg">人数</p>
            <input type="people" class="Form-Item-Input">
        </div>
        <br>
        <br>
        <input type="submit" class="Form-Btn" value="予約する">
        </div>

    </body>

    </html>
@endsection
