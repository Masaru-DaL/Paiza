# Laravel Lesson4
## 02:アプリケーションディレクトリを用意しよう
- 新しいプロジェクトの作成
  - laravel new [プロジェクト名]
- DBの作成
  - phpmyadmin-DB-DBの新規作成-DB名, utf-8_general_ci
- .envファイルを修正する
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lunchmapdb
DB_USERNAME=root
// DB_PASSWORD=secret

## 03:モデルとコントローラを用意しよう
- モデルファイルを作成
$ cd lunchmap
$ php artisan make:model Category -m
$ php artisan make:model Shop -m -c -r
// appディレクトリにCategory.phpとShop.phpが作成されている(モデルファイル)
// table名は複数形で表すが、モデルは単数形かつ先頭を大文字で記述する
// Http-ControllersディレクトリにShopController.phpが作成されている -> lunchmapアプリのコントローラ
// database-migrationsディレクトリにマイグレーションファイルが作成されている

- カテゴリーのマイグレーションファイルにカラムを追加
  - Shops
public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // 文字情報を保存するためにstringを指定
            $table->timestamps();
        });
    }

- Shopsマイグレーションファイルにカラムを追加
  - categories
public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('category_id'); // お店のカテゴリーを指定するためにカテゴリーidカラムを追加
            $table->timestamps();
        });
    }

- migrationを実行してDBに反映させる
$ php artisan migrate

## 04:お店とカテゴリのテーブルを関連付けよう
- Shopモデルにリレーションを設定
  - Providers-shop.php
class Shop extends Model
{
    public function category()
    {
        return $this->belongsTo('App\category');
    }
}
// belongsTo -> 所属するという意味 = カテゴリーモデルに所属しているという意味
// 自動的にショップモデルのカテゴリーidに一致するカテゴリーを見つけてくれる

- phpmyadminでサンプルデータを投入
  - categoriesテーブル
INSERT INTO categories(name)
VALUES
    ('イタリアン'),
    ('中華'),
    ('和食');

  - shopsテーブル
INSERT INTO shops(name,address,category_id)
VALUES
    ('パイザ亭', '東京都港区南青山3丁目', 1),
    ('ラーメンLaravel', '東京都港区東青山', 2),
    ('そばの霧島', '東京都港区西青山', 3);

-  PaizaCloud用https対応
   - app/Providers/AppServiceProvider.php
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

## 05:お店の一覧ページを作ろう
- お店一覧のルーティングを定義する
  - routes/web.php
<?php

Route::get('/shops', 'ShopController@index')->name('shop.list');

Route::get('/', function () {
    return redirect('/shops');
});

- コントローラにお店一覧を記述する
  - app/Http/Controllers/ShopController.php
<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }
}

- お店一覧のビューを作成する
  - resources/views/index.blade.php
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Lunchmap</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>お店一覧</h1>

        @foreach ($shops as $shop)
            <p>
                {{ $shop->category->name }},
                {{ $shop->name }},
                {{ $shop->address }}
            </p>
        @endforeach
    </body>
</html> お店一覧のビューを作成する
resources/views/index.blade.php

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Lunchmap</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>お店一覧</h1>

        @foreach ($shops as $shop)
            <p>
                {{ $shop->category->name }},
                {{ $shop->name }},
                {{ $shop->address }}
            </p>
        @endforeach
    </body>
</html>

## 06:共通テンプレートにBootstrapを導入しよう
- layout.blade.phpを分離する
  - resources/views/layout.blade.php
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Lunchmap</title>
        <style>body {padding: 80px;}</style>
    </head>
    <body>
        @yield('content')
    </body>
</html>

- index.blade.phpに、セクションを追加
  - resources/views/index.blade.php
@extends('layout')

@section('content')
    <h1>お店一覧</h1>

    @foreach ($shops as $shop)
        <p>
            {{ $shop->category->name }},
            {{ $shop->name }},
            {{ $shop->address }}
        </p>
    @endforeach
@endsection

- 共通テンプレートにBootstrapを割り当てる
  - resources/views/layout.blade.php
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        <title>Lunchmap</title>
        <style>body {padding-top: 80px;}</style>
    </head>
    <body>
        <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
            <a class='navbar-brand' href={{route('shop.list')}}>Lunchmap</a>
        </nav>
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>

## 07:お店の詳細ページを作ろう
- ルーティングを設定する
  - routes/web.php
Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail');

Route::get('/', function () {
    return redirect('/shops');
});

- コントローラを記述する
  - app/Http/Controllers/ShopController.php
/**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('show', ['shop' => $shop]);
    }

- ビューを追加する
  - resources/views/show.blade.php
@extends('layout')

@section('content')
    <h1>{{ $shop->name }}</h1>
    <div>
        <p>{{ $shop->category->name }}</p>
        <p>{{ $shop->address }}</p>
    </div>
    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
    </div>
@endsection

- お店一覧をテーブルタグにして、リンクを追加
  - resources/views/index.blade.php
@extends('layout')

@section('content')
    <h1>お店一覧</h1>

    <table class='table table-striped table-hover'>
        <tr>
            <th>カテゴリ</th><th>店名</th><th>住所</th>
        </tr>
        @foreach ($shops as $shop)
            <tr>
                <td>{{ $shop->category->name }}</td>
                <td>
                    <a href={{ route('shop.detail', ['id' =>  $shop->id]) }}>
                        {{ $shop->name }}
                    </a>
                </td>
                <td>{{ $shop->address }}</td>
            </tr>
        @endforeach
    </table>
@endsection

## 08:新規投稿フォームを作ろう
- ルーティングを設定する
  - routes/web.php
Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shop/new', 'ShopController@create')->name('shop.new');
Route::post('/shop', 'ShopController@store')->name('shop.store');

Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail');

Route::get('/', function () {
    return redirect('/shops');
});

- コントローラのcreate()を記述する
  - app/Http/Controllers/ShopController.php:
<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Category;
use Illuminate\Http\Request;

/**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
public function create()
{
    $shop = new Shop;
    $categories = Category::all()->pluck('name', 'id');
    return view('new', ['shop' => $shop, 'categories' => $categories]);
}
// pluckメソッド -> 要素の中から指定した項目だけを取り出してくれる
- 新規投稿フォームのビューを追加する
  - resources/views/new.blade.php

@extends('layout')

@section('content')
    <h1>新しいお店</h1>
    {{ Form::open(['route' => 'shop.store']) }}
        <div class='form-group'>
            {{ Form::label('name', '店名:') }}
            {{ Form::text('name', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('address', '住所:') }}
            {{ Form::text('address', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('category_id', 'カテゴリ:') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-outline-primary']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
    </div>

@endsection

## 09:投稿フォームの内容を保存しよう
- コントローラのstore()を記述する
  - app/Http/Controllers/ShopController.php:
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id]);
    }

- 一覧ページから新規投稿フォームにリンクする
  - resources/views/index.blade.php
@extends('layout')

@section('content')
    <h1>お店一覧</h1>

    <table class='table table-striped table-hover'>
        <tr>
            <th>カテゴリ</th><th>店名</th><th>住所</th>
        </tr>
        @foreach ($shops as $shop)
            <tr>
                <td>{{ $shop->category->name }}</td>
                <td>
                    <a href={{ route('shop.detail', ['id' =>  $shop->id]) }}>
                        {{ $shop->name }}
                    </a>
                </td>
                <td>{{ $shop->address }}</td>
            </tr>
        @endforeach
    </table>

    <div>
        <a href={{ route('shop.new') }} class='btn btn-outline-primary'>新しいお店</a>
    <div>
@endsection

## 10:お店の編集フォームを作ろう
- ルーティングを設定する
  - routes/web.php
Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shop/new', 'ShopController@create')->name('shop.new');
Route::post('/shop', 'ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}', 'ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'ShopController@update')->name('shop.update');

Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail');

Route::get('/', function () {
    return redirect('/shops');
});

- コントローラのedit()を追記
  - app/Http/Controllers/ShopController.php:
    public function edit($id)
    {
        $shop = Shop::find($id);
        $categories = Category::all()->pluck('name', 'id');
        return view('edit', ['shop' => $shop, 'categories' => $categories]);
    }

- editビューを作成する
  - resources/views/edit.blade.php
@extends('layout')

@section('content')
    <h1>{{$shop->name}}を編集する</h1>
    {{ Form::model($shop, ['route' => ['shop.update', $shop->id]]) }}
        <div class='form-group'>
            {{ Form::label('name', '店名:') }}
            {{ Form::text('name', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('address', '住所:') }}
            {{ Form::text('address', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('category_id', 'カテゴリ:') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group">
            {{ Form::submit('更新する', ['class' => 'btn btn-outline-primary']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
    </div>

@endsection
