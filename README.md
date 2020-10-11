# 請求書ジェネレーター

## 内容
請求書データをPDFで出力する

## タスク
- [ ] PDFを出力する
- [ ] 外部フォントを設定する
- [ ] 

## 参考
- [LaravelでPDF出力](http://spacetimebubble.net/blog/2019/04/07/laravel%E3%81%A7pdf%E5%87%BA%E5%8A%9B/)

### Docker環境の破棄
- コンテナの停止、ネットワーク・名前付きボリューム・コンテナイメージを削除
	```
	docker-compose down --volumes --rmi all
	```
- 作業ディレクトリの削除
	```
	cd ..
	rm -rf laravel-on-docker
	
	```

### Node.jsのインストール
```
docker-compose up -d
docker-compose exec app bash
curl -sL https://deb.nodesource.com/setup_10.x | bash -
apt-get install -y nodejs
```

### 環境の再構築
- GitHubからリポジトリをクローン
	```
	git clone git@github.com:ken17yama/laravel-on-docker.git
	cd laravel-on-docker
	docker-compose up -d --build
	
	```
- Laravelインストール
	```
	docker-compose exec app bash
	composer install
	cp .env.example .env
	php artisan key:generate
	php artisan migrate
	```
	→[http://127.0.0.1:10080](http://127.0.0.1:10080)で確認できるはず！！
# InvoiceGenerator
