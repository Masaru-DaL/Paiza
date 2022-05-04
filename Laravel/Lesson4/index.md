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

