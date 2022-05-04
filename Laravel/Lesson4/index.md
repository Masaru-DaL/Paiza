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
  - ShopController.php
public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

-
