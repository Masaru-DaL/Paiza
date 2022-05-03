# Laravel Lesson3
## 02 テンプレートを共通化しよう
- 画面の共通部分のテンプレート化
  - index.blade.phpをコピー
    - layout.blade.php
<body>
    @yield('content')
</body>

- 各画面のビューを修正
  - 記事一覧 -> index.blade.php
@extends('layout') // 共通テンプレートを指定

@section('content') // ~@endsectionまでをyieldに当てはめる
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    @foreach ($articles as $article)
        <p>
            <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
                {{ $article->content }},
                {{ $article->user_name }}
            </a>
        </p>
    @endforeach
    <div>
        <a href={{ route('article.new') }}>新規投稿</a>
    </div>
@endsection

- 詳細ページの修正
  - show.blade.php
    - index.blade.phpと同じように修正する

## 03 掲示板にBootstrapを適用しよう
- 追加テンプレート用ファイルの用意
  - viewディレクトリにファイルの新規作成
    - style-sheet.blade.php
- ファイルの記述
  - ネット上にあるブートストラップのライブラリを指定
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'&gt;
<style>body {padding-top: 80px;}</style>

- 共通テンプレートの読み込みを記述
  - layout.blade.php
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        @include('style-sheet')
    </head>
    <body>
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>

