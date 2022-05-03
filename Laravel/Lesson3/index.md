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
@extends('layout')

@section('content')
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
