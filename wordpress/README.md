# 開発環境へのアクセス方法
以下のコマンドで開発環境を立ち上げ、http://locahost:8000にアクセスする。

## コマンド一覧
* 開発環境立ち上げ
```
docker-compose up
```

* 起動中コンテナへのログイン
```
docker exec -it wordpress_wordpress_1 /bin/bash --login
```
