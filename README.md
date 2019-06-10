このレポジトリは「[WordPressによるWebアプリケーション開発](https://www.amazon.co.jp/dp/4873117062)」を参考にWordPressの学習を行うためのもの

## 概要

最新版のWordPressを使って色々テストしたいときようのベースレポジトリ

## 細かいDB情報やWordPress情報の確認

- `docker-compose.yml` の中のコードを確認すること
- DBに保存するデータは `db/` ディレクトリ直下に作られる
  - `db` ディレクトリは、 `docker-compose` 起動後に自動的に作られる
- `wordpress` ディレクトリが起動後に自動で生成されて、その中にWordPressコード一式が用意される
- `php.ini` でアップロードするファイル容量をデフォルトから増やしている

## Docker関連

### 起動

`docker-compose.yml` の置いてあるディレクトリ内で以下のコマンドを実行

```sh
docker-compose up -d
```

### 停止

`docker-compose.yml` の置いてあるディレクトリ内で以下のコマンドを実行

```sh
docker-compose down
```

### docker-composeで起動したwordpressサーバーにログインするときのコマンド

```sh
docker-compose run wordpress /bin/bash
```

### php.iniをwordpresのコンテナーにコピーしてアップロードできるファイルサイズを増やす

~~docker cp ./php.ini <コンテナID>:/usr/local/etc/php/conf.d/php.ini~~

https://github.com/docker-library/wordpress/issues/375