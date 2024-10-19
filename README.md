# LaravelSail 起動コマンド
```
$ ./vendor/bin/sail up -d
```
# git2回目以降のcommit -> push
```
$ git add .
$ git commit -m 'コミットメッセージ'
$ git push origin　ブランチ名
```
# php artisanの置き換え
ex: 
```
$ php artisan make:migration create_words_table

$ ./vendor/bin/sail artisan make:migration create_words_table
```
# MySQLへの接続
```
./vendor/bin/sail mysql
```
# MySQLにおけるDBの具体的なテーブルの表示
ex: wordsテーブルの場合
```
show columns from words;
```
