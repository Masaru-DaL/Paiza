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
        @include('style-sheet') // style-sheet.blade.phpの読み込み
    </head>
    <body>
        <div class='container'> // 見た目の部分をコンテナで指定する
            @yield('content')
        </div>
    </body>
</html>

- ナビゲーションバーの追加
  - viewディレクトリにnav.blade.phpを新規作成
<nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'> // 複数のクラスを指定可能
    <a class='navbar-brand' href={{ route('article.list') }}>paiza bbs</a>
</nav>

- 共通テンプレートに追加
  - layout.blade.php
bodyタグ内に @include('nav') を追加で記述

## 04 Bootstrapでページの見栄えを整えよう
- 記事の一覧をテーブルタグで表示
  - index.blade.php
@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <table class='table table-striped table-hover'> // 1行ごとに色を付け、マウスホバーで色を変える
         @foreach ($articles as $article)
            <tr>
                <td>
                    <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
                    {{ $article->content }}
                    </a>
                </td>
                <td>
                    {{ $article->user_name }}
                </td>
            </tr>
        @endforeach
    </table>

    <div>
        <a href={{ route('article.new') }}>新規投稿</a>
    </div>
@endsection

- リンクをボタンで表示
  - index.blade.php(body-divタグ内)
<a href={{ route('article.new') }} class='btn btn-outline-primary'>新規投稿</a>

- 詳細ページのボタンの変更
  - show.blade.php
@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <p>{{ $article->content }}</p>
    <p>{{ $article->user_name }}</p>

    <p>
        <a href={{ route('article.list') }} class='btn btn-outline-primary'>一覧に戻る</a>
    </p>
    <div>
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
    </div>
@endsection

## 05 検索フォームを設置しよう
- 検索フォームを表示するテンプレートの作成
  - viewディレクトリに、search.blade.phpを新規作成
{{ Form::open(['method' => 'get']) }}
    {{ csrf_field() }}
    <div>
        {{ Form::label('keyword', 'キーワード:') }}
        {{ Form::text('keyword', null, ['class' => 'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::submit('検索', ['class' => 'btn btn-outline-primary']) }}
        <a href={{ route('article.list') }}>クリア</a>
    </div>
{{ Form::close() }}

- 記事一覧のビューに検索フォームのテンプレートを追加
  - index.blade.php
<p>{{ $message }}</p> の下に
@include('search')

## 06 フォームの値を取得しよう
- 検索フォームからゲットメソッドでキーワードを受け取ったら、該当の記事を表示するよう修正
  - ArticleController.php
    public function index(Request $request)
    {
        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $message = 'Welcome to my BBS: ' . $keyword;
        } else {
            $message = 'Welcome to my BBS';
        }
        $articles = Article::all();
        return view('index', ['message' => $message, 'articles' => $articles]);
    }
// ゲットメソッドで受け取ったデータは引数に指定したリクエスト変数で取り出すことができる
// if文でキーワードのデータが存在しているかチェックする
// filledメソッドはキーワードが存在していて、同時に空ではないかをチェックする
// キーワードを受け取っていたら、メッセージ変数にキーワードを連結し、そうでなければメッセージをそのまま表示する
