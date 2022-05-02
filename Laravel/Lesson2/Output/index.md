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
