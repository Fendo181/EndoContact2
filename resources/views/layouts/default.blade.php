<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
     <!-- CSS-->
     <!-- <link rel="stylesheet" href="\css\styeles.css"> -->
     <!-- BootStrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    <div class="container">
        @yield('blog_title')
    </div>

    {{-- 画像 --}}
    <div align="center">
        @yield('img1')
    </div>

    {{-- リンク ページ --}}
    <div class="container">
        @yield('about')@yield('aboutme')@yield('git')@yield('Dot')
    </div>

    {{-- コンテンツの表示 --}}
    <div class="container">
       @yield('content')
    </div>

    {{-- バックリンク --}}
    <div class="container">
        @yield('back')
    </div>
<script>


</script>
</body>
