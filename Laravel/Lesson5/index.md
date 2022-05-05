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

