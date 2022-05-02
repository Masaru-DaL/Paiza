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
  - マイグレーションを実行してDBにカラムの追加
    - php artisan migrate
- artisan tinkerで確認
  - Article::all()
- サンプルデータの追加
  - $article = Article::find(1)
  - $article->user_name = 'paiza'
  - $article->save()

## 04
- アプリケーションのモデル
  - bbs-app-Article.php
- ルーティング
  - bbs-routes-web.php
- コントローラー
  - bbs-app-Http-Controllers-ArticleController.php
  - appディレクトリのArticleモデルをuseすることで記事データを扱うことができる
- viewファイル
  - bbs-resources-viewsディレクトリ内
  - ブレードというテンプレートエンジンを利用
  - index
    - articlesからループで要素を取り出して、各記事のコンテントを表示する
  - show
    - コントローラーから受け取った個別の記事を表示させる
- user_name
  - viewファイルの変更
  - index
    - {{ $article->user_name }} を追加
  - show
    - <p>{{ $article->user_name }}</p> を追加

## 05
- ルーティングの確認
  - bbs-routes-web.php
- ルーティングの修正(/の後に何も付けないときの動作)
Route::get('/', function () {
    return redirect('/articles');
});
-> /だけを指定すると/articlesに切り替える

## 06
- [new]というルーティングの追加
Route::get('/article/new', 'ArticleController@create')->name('article.new');
  - /newが付いている場合にcreateメソッドを呼び出す
- コントローラーの修正
public function create(Request $request)
    {
        $article = new Article();

        $article->content = 'Hello BBS';
        $article->user_name = 'paiza';
        $article->save();
        return redirect('/articles');
    }
- ※newのルーティングをid指定のルーティングより前に記述しないとエラーになってしまう
- 記事一覧のページに新規ページを作成するリンクの作成
  - ボディの綴じタグ前に
<div>
    <a href={{ route('article.new') }}>新規投稿</a>
</div>
