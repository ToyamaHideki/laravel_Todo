
# 筋トレの美学  

	筋トレ管理が行えるToDOアプリケーション  
	また体重管理、摂取カロリー、摂取タンパク質の管理が行える 
	機能を搭載したアプリケーションになります。  

	

## Dependency

	PHP 8.1.1
	Laravel sail  8.1

## Setup

    対応OS (Mac,Windows※1)  
    ※1 Windowsの方はバージョンによって別途  
        Ubuntuのインストール､WSL2の設定が必要になります。  
        

	** 1.事前準備 **  
		
		1.1 Dockerのインストール  
		　　　Docker ホームページ  
		   　 https://www.docker.com/products/docker-desktop  
		      
		1.2 GitBashのインストール(windowsの方)  
			　gitbash  ダウンロードページ 
			　https://gitforwindows.org/  
		      
		1.3 Githubアカウントの作成  
			　Github HP  
		   　 https://github.co.jp/  
		    　アカウント作成時、参考にしたサイト  
		  　  https://qiita.com/ayatokura/items/9eabb7ae20752e6dc79d  
		    
		    
		    
	** 2.GIthubリポジトリのクローン作成 **  
	  　　　　  
	  　2.1 クローンの作成  (Github HP クローン参照)  
	  　　　https://docs.github.com/ja/repositories/creating-and-managing-repositories/cloning-a-repository  
	    
	    
	    
	** 3.セットアップ **  
		
		** クローン後にvendorファイルと.envファイルの設定が必要 **  
		    参考サイト  
		　　http://vdeep.net/laravel-git-clone  
		　　  
		　※seederにはダミーデータが含まれております。
		　　こちらのコードから実行するseederを指定して実行してください。  
		　　    
		　　 ** ./vendor/bin/sail artisan db:seed --class=genrusTableSeeder **  
		　　    
		　　Bashエイリアスの設定済みの場合  
		　　
		　　 ** sail artisan db:seed --class=genrusTableSeeder **  
		　　   
		　　   
	** 4.sail 起動 **  
	  
	  4.1 Sail の起動  
	    
	  	** ./vendor/bin/sail up **  
	  	
	  4.2 ページ接続  
	    アドレスバーに下記のアドレスを記入  
	      
	    ** localhost **  
	    
	  4.3 Sail の停止  
	    
	  	** ./vendor/bin/sail up **  
	  
	  

## 使用方法
  
筋トレタスク管理ページ  
  
1.筋トレを行う日付の登録  
 　左下のカレンダーから日付を選択し新規プロジェクト作成  
  
2.右下の新規タスクの作成を行う  
　ジャンルとタスク名は必須  
　タスク名には種目名を記入するとわかりやすい。  
　例）腕立て伏せ、ダンベルフライ15kg、ベンチプレス80kg等  
　回数とセット数、心理状態やコンディションは未記入でも可  
　セット数や回数が決まっていない場合は編集ボタンで後から更新可能  
  
3.タスクの達成  
　タスクの達成はボタンを押す事で達成に切り替わる  
　達成ボタンが押された時「未達成ボタン」に変化(誤操作対策)  
  
4.タスクの編集、削除  
　＜編集＞  
　タスクの編集は達成ボタンの右隣のボタンをクリック  
　下の「新規タスク作成」の部分が「更新」へと変化  
　そちらで内容の編集を行う  
　＜削除＞  
　タスク右上の×ボタンでタスクの削除を行う  
　  
　  
体重管理ページ  
   
1.体重管理ページへ遷移  
　筋トレタスク管理画面左上の「体重管理」アイコンをクリックで移動できます。  
2.体重の登録  
　「-体重測定値(kg)-」入力欄に数値と日付を入力。  
3.摂取カロリーの登録  
　「-摂取カロリー(kcal)-」入力欄に数値を日付を入力。※2  
4.摂取タンパク質の登録  
　「-摂取タンパク質(g)-」入力欄に数値を日付を入力。※2  
5.目標体重の登録、更新  
　「-目標体重の更新(kg)-」入力欄に数値を入力  
　  
　※2　仕様  
　　1日に何回かに分けて数値の入力行う事ができます。  
　　食事毎に数値の入力を行う。一日の最後に計算した値を入力する  
　　自分のライフスタイルに合った管理でご利用ください。  
　　  
6.筋トレタスク画面へ戻る  
　体重管理画面左上の「筋トレの美学」アイコンをクリックで移動できます。  
　  
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
・Laravel Sail  
  https://readouble.com/laravel/8.x/ja/sail.html  
・Docker  
  https://www.docker.com/products/docker-desktop  
・Github HP  
  https://github.co.jp/  
・アカウント作成時、参考にしたサイト  
  https://qiita.com/ayatokura/items/9eabb7ae20752e6dc79d  
・Githubからクローンを行う(クローン実行後)  
  http://vdeep.net/laravel-git-clone  
  
