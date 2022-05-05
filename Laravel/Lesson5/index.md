# Laravel Lesson5
## 02:ユーザー管理機能を追加しよう
- 新規のアプリケーションディレクトリを追加する
$ laravel new test_auth

これで、ユーザー管理用のモデル・コントローラ・マイグレーションファイルが用意される

- ディレクトリ作成を高速化するには
"laravel new"コマンドの実行前に以下のような設定をしておけば、コマンドの実行時間を短くできます。

$ composer config -g repositories.packagist composer 'https://packagist.jp'
$ composer global require hirak/prestissimo

- ユーザー管理機能を自動生成
$ php artisan make:auth

これで、ユーザー管理用のルートとビューを追加する。
登録されているルートを確認するには、次のコマンドを実行する。

php artisan route:list

## 03:ユーザー管理用のテーブルを用意しよう
- データベース設定 > test_auth/.env
  - test_auth/.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myauth
DB_USERNAME=root
// DB_PASSWORD=secret

- マイグレート
$ cd test_auth
$ php artisan migrate

- paiza-cloud用https対応
  - app/Providers/AppServiceProvider.php
※ Laravelのバージョンによっては、メソッドの並び順が異なる場合があります。

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

## 05:ログイン機能を追加しよう
- ユーザー管理用のルートとビューを追加
$ php artisan make:auth

- 共通テンプレートに、ログイン用のコードを追加する
  - resources/views/layout.blade.php
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='csrf-token' content='{{ csrf_token() }}'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
    <title>Lunchmap</title>
    <style>body {padding-top: 80px;}</style>
    <script src='{{ asset("js/app.js") }}' defer></script>
</head>

  - resources/views/layout.blade.php
<nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
    <a class='navbar-brand' href={{route('shop.list')}}>Lunchmap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

