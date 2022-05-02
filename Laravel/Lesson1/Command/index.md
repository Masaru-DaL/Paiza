# Laravel Lesson1
## 02
- プロジェクトの作成
  - laravel new [プロジェクト名]
- サーバの起動
  - php artisan serve

## 03
- サーバのファイルの変更
  - bbs -> resources -> views -> welcome.blade.php
- 日時の埋め込み
  - <p><?= date('Y/m/d H:i:s') ?></p>
- Q1
  - Laravel -> Hello paiza
- Q2

## 04
- DBの作成
  - php -> phpmyadmin
  - DB -> DBを作成する -> my bbs -> utf8_general_cl
- データベースの呼び出しの設定
  - 隠しファイル
    - .env
      - DB_DATABASE=mybbs
      - DB_USERNAME=root
      - DB_PASSWORD -> コメントアウト
- Q1
  - DB_DATABASE=myblogdb
  - DB_USERNAME=root
  - # DB_PASSWORD=secret

## 05
- モデルの作成
  - ターミナル -> プロジェクトに移動
  - php artisan make:model Article -m -c -r
    - appディレクトリにArticle.phpファイルが作成される
  - Http -> Controllers -> ArticleController.php
    - アプリケーションの動作に合わせてコードを記述する
  - Database -> migrations -> マイグレーションファイル
    - データベースを設定するためのファイル
    - ここで記述した内容をデータベースに反映させる
      - コンテントカラムの追加
        - idの下
          - $table->string('content');
          - 保存
          - マイグレーションファイルの実行
            - ターミナル
            - php artisan migrate
  - サンプルデータの登録
    - 挿入 -> 3行ずつ挿入を行う
    - hello world, hello laravel, 世界の皆さん、こんにちは

## 06
- ルーティングの確認
  - bbs - routes - web.php
- ルートの追加
  - 一覧ページ
    - Route::get('/articles', 'ArticleController@index')->name('article.list');
      - /articlesにアクセスするとArticleControllerのindexメソッドが呼び出される
      - nameがついているのでarticle.listでリンクを貼ることができる
  - 詳細ページ
    - Route::get('/article/{id}', 'ArticleController@show')->name('article.show');
      - id=整数で指定
- httpsを使うようアプリケーションの全体の設定を変更
  - bbs - app - providers - AppServiceProvider.php
    - public function register()
    {
        \URL::forceScheme('https');
    }

## 07
- コントローラーにコードを追加
  - bbs - app - Http - Controllers - ArticleController.php
  - インデックスメソッドの作成
    - public function index()
    {
        return view('index');
    }
- viewの作成(アプリケーションの見た目を定義)
  - bbs - resources - views - ファイルの新規作成
    - index.blade.php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>paiza bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>paiza bbs</h1>
    </body>
</html>

- コントローラーからビューにデータを渡す
  - ArticleController.php
    - public function index()
      {
          $message = 'Welcome to my BBS';
          return view('index', ['message' => $message]);
      }
  - index.blade.php
    - bodyタグ内に
    - <p>{{ $message }}</p>

## 08
- サンプルデータ一覧の表示
  - bbs-app-Http-Controllers-ArticleController.php
    - public function index()
    {
        $message = 'Welcome to my BBS';
        $articles = Article::all();
        return view('index', ['message' => $message, 'articles' => $articles]);
    }
  - bbs-resources-views-index.blade.php
    - bodyタグ内(メッセージ変数のpタグの下)
@foreach ($articles as $article)
    <p>{{ $article->content }}</p>
@endforeach

## 09
- showメソッドの記述
  - bbs-app-Http-Controllers-ArticleController.php
  - public function show(Request $request, $id, Article $article)
    {
        $message = 'This is your article ' . $id;
        $article = Article::find($id);
        return view('show', ['message' => $message, 'article' =>$article]);
    }
- viewの作成
  - cp resources/views/index.blade.php resources/views/show.blade.php
- show.blade.php ->
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>paiza bbs</h1>
        <p>{{ $message }}</p>
        <p>{{ $article->content }}</p>

        <p>
            <a href={{ route('article.list') }}>一覧に戻る</a>
        </p>
    </body>
</html>
