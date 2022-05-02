# Laravel Lesson2
## 02
- artisan tinker
  - 対話型コンソール
  - 呼び出し
    - php artisan tinker
      - 終了 -> exit, Ctrl+C
  - DBのサンプルデータの表示
    - Article::all()
  - 指定のidを表示
    - $article = Article::find(1)
  - カラムを指定してデータを取り出す
    - $article->content
  - DBに新しいデータを追加
    - $article = new Article()
    - $article->content = 'Hello tinker'
    - $article->save()
  - レコードの削除(Deleteメソッド)
    - 最後に追加したものは$articleに格納されているので
    - $article->delete()

## 03
- ユーザーネームカラムの追加
  - マイグレーションファイルの自動生成
    -  php artisan make:migration add_column_username --table=articles
    - bbs-database-migrations-ファイルが生成
      - upメソッド
        - データベースに追加したい項目を指定
      - downメソッド
        - 取り消したい項目を指定
    - public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('user_name');
        });
    }
