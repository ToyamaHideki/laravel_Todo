<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrapを使いますよ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <!-- google icon 使います -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- JS -->
    <script src="{{ asset('/js/text.js') }}"></script>
    <!--jQuary CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--レスポンシブ対応させるよ  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
</head>
<body>
    @yield("content")



    <script>
            // モーダルウィンドウを開く
            $('.js-modal-open').on('click', function(){
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            scrollPosition = $(window).scrollTop();

            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            return false;
            });

            // モーダルウィンドウを閉じる
            $('.js-modal-close').on('click', function(){
            $('body').removeClass('fixed');
            window.scrollTo( 0 , scrollPosition );
            $('.js-modal').fadeOut();
            return false;
            });
        </script>
</body>
</html>