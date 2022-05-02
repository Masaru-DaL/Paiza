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
