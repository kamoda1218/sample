<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サンプル</title>
</head>
<body>
<p>{{ $now->format('Y年m月d日 H時i分s秒') }}</p>
    <div id="app">
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>