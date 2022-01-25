
# laravel_Todo

	筋トレを学び始めた初学者は
	自分の好きな部位を鍛えがち

	先にスケジュール化することで
	苦手な種目を含め、全身の筋トレを促す
	筋トレ用todoアプリになります。

## Dependency

	PHP 8.1.1
	Laravel sail  8.1

## Setup

	1.必要なソフトのインストール
		・Laravel Sail
		  https://readouble.com/laravel/8.x/ja/sail.html
		・Docker
		  https://www.docker.com/products/docker-desktop
		
	2.Githubアカウントの作成
		・Github HP
		  https://github.co.jp/
		・参考にしたサイト
		  https://qiita.com/ayatokura/items/9eabb7ae20752e6dc79d
		  
	Github からインストールする場合
		vendorファイルと.envファイルの作成が必要
		コマンドプロンプトを使用(Macはターミナル)
		todoアプリのディレクトリ内で 
		
		composer install	
		
		vendorファイルが作成されたら
		.envファイルの設定
		あらかじめ用意されている .env.exampleを
		.envにリネーム。DBのなどの設定を行う。
		
		./vendor/bin/sail up  
		
		docker起動後
		
		php artisan migrate:refresh --seed
		
		DBにデータベースの作成を行う。
		
		URL記入欄に
		
		localhost  
		
		記入でアプリ起動
		

## Usage

まずは筋トレを行う日付の登録を行うため
左下のカレンダーから日付を選択し新規プロジェクト作成

次に右下の新規タスクの作成を行う
ジャンルとタスク名は必須

タスク名には種目名を記入するとわかりやすい。
例）腕立て伏せ、ダンベルフライ15kg、ベンチプレス80kg等

回数とセット数、心理状態やコンディションは未記入でも可
セット数や回数が決まっていない場合は編集ボタンで後から更新可能




## License
Copyright (c) 2021 Toyama Hideki

Permission is hereby granted, free of charge, to any person obtaining a 
copy of this software and associated documentation files (the 
"Software"), to deal in the Software without restriction, including 
without limitation the rights to use, copy, modify, merge, publish, 
distribute, sublicense, and/or sell copies of the Software, and to 
permit persons to whom the Software is furnished to do so, subject to 
the following conditions:

The above copyright notice and this permission notice shall be 
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE 
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION 
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION 
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Authors

	Toyama Hideki
 
## References

	https://readouble.com/laravel/8.x/ja/installation.html

