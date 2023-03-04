# gulp環境コーディングガイドライン　Ver. 2.0.2

----

## 基本方針

### コーディング3原則

* #### わかりやすい

* #### 拡張しやすい

* #### 再利用しやすい

### コーディング時の注意点

1. できる限りシンプルに、必要最小限の記述でコーディングを行う。
2. 運用や更新が想定される箇所においては、内容の増減に対応できるよう可能な限り配慮する。
CMS組み込み時などは、WYSIWYG（投稿機能などの入力により）で挿入されるHTMLタグにも考慮したマークアップを行う。
3. サイトの構成要素は、運用のしやすさと複数人での制作を考慮した作りにする。
4. ユーザーの閲覧環境を考慮した作りにする。

## HTML制作ルール

指定のない限り、HTML制作は下記ルールに従ってコーディングを行うこと。
指定のある場合は、そのルールに従うこと。

### 基本ルール

#### 対象ブラウザ

* Chrome 最新版
* Firefox 最新版
* Safari 最新版
* Edge 最新版

Chrome及びFirefoxについては、Windows・MacOSの両方で動作確認を行い、コーディング時の各バージョンをプロジェクト内で共有すること。
プロジェクト進行中にブラウザのバージョンアップが行われた場合は、最新バージョンでのチェックも行うこと。

また、対象ブラウザ外のブラウザでも表示の確認を行ない、大きなレイアウト崩れが発生する場合は修正を行うこと。

#### 文字コード

UTF-8

#### 改行コード

LF（Unix、Linux、Mac）

#### DOCTYPE

HTML5を使用すること。
※現在のHTMLの標準は「HTML living standard」です。HTML5との相違がある場合には「HTML living standard」に合わせてください。
https://html.spec.whatwg.org/

	<!DOCTYPE html>

#### マークアップ全般

文章内容に適したマークアップを行う。
W3Cが勧告するHTML5の仕様に準拠したマークアップを行う。

コーディング完了時には構文チェックサイトによるアウトラインチェックを必ず行うこと。
※社内コーディングの最低限の水準としてわかりやすいアウトラインを意識する（[食べログ](https://tabelog.com/tokyo/A1304/A130403/13000682/)を参考）
[HTML 5 Outliner](https://gsnedders.html5.org/outliner/)
h1,h2,h3,pなどのタグの特性を理解し、ページ構成がわかりやすいタグの選択を行う

例
<h1>動物</h1>
  <h2>哺乳類</h2>
      <h3>ヒト</h3>
      <h3>犬</h3>
      <h3>猫</h3>
  <h2>鳥類</h2>
      <h3>はと</h3>
      <h3>たか</h3>
      <h3>鶏</h3>
  <h2>両生類</h2>
      <h3>かえる</h3>


#### 改行とインデント

* ソースの改行はブロック要素の終了タグの後など、適宜行う。
* body内の要素には、構造に合わせて適宜インデントを施し、視認性の高いソースコードを実現する。

#### パスの記述ルール

HTMLコーディング段階では相対パスを利用する。

相対パス

	<img src="../path/to/image.jpg" alt="" />

CMSやシステム組み込みのタイミングでプロジェクトに応じて、下記ルールへ変更してもよいが、プロジェクト内に複数のパスルールが存在してはならない。

ルート相対パス

	<img src="/path/to/image.jpg" alt="" />

絶対パス

	<img src="http://example.com/path/to/image.jpg" alt="" />

プロトコルなし

	<img src="//example.com/path/to/image.jpg" alt="" />

#### OGP

FacebookなどのSNSにて、いいね！やシェアされた時を考慮しOGPを設定する。
内容はディレクターに確認する。

#### jQuery

JavaScript組み込みなどで利用するjQuery本体を読み込むこと。
jQueryはCDNからプロトコル無しで読み込む

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

### HTMLタグ記述ルール

HTMLタグはW3Cが定める記述ルールに従って記述すること。

#### headタグ内のmetaタグ、titleタグの順序

charset > viewport > title > descriptionの順序で記述すること。

	<meta charset="utf-8">
	<meta name="viewport" content="width=1280, maximum-scale=1">
	<title>PAGETITLE｜SITENAME</title>
	<meta name="description" content="サイトdescriptionを書く" />

#### クラスセレクタ、idセレクタ

idセレクタは、基本的に使用しない。
※アンカーリンクなどを設定する場合は例外とする。

#### コメントアウト

ソース内容が把握しやすいよう、class、id付きの閉じタグの直後にコメントを入れる。
※コメントを挿入することで、ソースの視認性を上げ人的ミスの発生を抑えることを目的とする。
※ただし、わかりやすさを重視しコメントアウトは必要最小限に留める。
特にコメントを挿入する位置は以下のようなところだとわかりやすい
・各コンテンツのセクション区切りごと
・繰り返し利用セクション（CTAやボタンなど）
・運用管理上、変更の可能性が大きい部分（クライアントの運用による）
・システム上どうしても必要で、リニューアル時に不要かどうかわかりにくい部分

	<div class="contents">
	〜
	</div><!-- // contents -->

### フォーム関連タグの記述ルール

フォーム関連タグはコーディングデータをプログラマーが追加・修正する事が多いため、他タグとは別のルールを設ける。

#### `<form>`タグ

formタグには必ずmethod属性、action属性を付ける。
methodはpostを指定。actionは空にすること。

	<form method="post" action="">
		〜
	</form>

#### `<input>`タグ

name属性、value属性は省略せずに必ず書くこと。値は空にする。

##### NG

    <input type="text" />

##### OK

    <input type="text" name="" value="" />


submitボタンが画像の場合、 `<button>` かbackgroundに画像を指定する。

##### NG

```
<input type="image"  />
```

##### OK

```
<button type="submit" name="" value=""></button>
```

もしくは

```
<input type="submit" name="" value="" />
```

で、cssで背景に画像を指定する。

#### `<select>`タグ

name属性、value属性は省略せずに必ず書くこと。値は空にする。

##### NG

	<select>
	<option>選択してください</option>
	<option>北海道</option>
	<option>青森</option>
	....
	</select>

##### OK

	<select name="">
		<option value="">選択してください</option>
		<option value="1">北海道</option>
		<option value="2">青森</option>
		....
	</select>

#### `<textarea>`タグ

name属性は省略せずに必ず書くこと。値は空にする。
textarea内には余分な改行、スペース、タブなどを入れない。
※サンプルデータ挿入時は除く

##### NG

	<textarea>
	</textarea>

##### OK

	<textarea name=""></textarea>

### その他記述ルール

#### Googleタグマネージャ

Googleタグマネージャのタグは原則としてhead終了タグの直前に記述する。

#### 機種依存文字の記述

機種依存文字の記述には文字実体参照を使用する。
特に全角チルダはMacで入力した場合、Windowsでは見え方が変わってしまうため注意。

| 記号   | 意味          | 文字実体参照         |
|:------:|:-------------:|:--------------------:|
|<       | 小なり不等号  | `&lt;`               |
|>       | 大なり不等号  | `&gt;`               |
|&       | アンパサンド  | `&amp;`              |
|&nbsp;  | 半角スペース  | `&nbsp;`             |
|&copy;  | 著作権        | `&copy;`             |
|&yen;   | 円マーク      | `&yen;`              |
|&#xff5e;| 全角チルダ    | `&#xff5e;`           |
[主な文字実体参照例]

参考URL
[全角チルダと波ダッシュ](http://ib-ennoshita.jp/2008/09/22-ogawa.html)

## CSS制作ルール

### ファイル構成

HTMLテンプレートでは下記ルールでファイル分けを行なっている。

#### CSSファイル

##### HTMLから読み込むファイル

style.css

#### SCSSファイル

##### 基本レイアウト

<pre style="font-family:'MS PGothic'">
 src/
　├ img/（画像用）
　├ js/（JavaScript用）
　└ scss/（CSS用）
　 ├ base
　 │├ reset.scss（リセットファイル）
　 │└ util.scss（utilityファイル）
　 ├ global
　 │└ settingに関するファイルなど
　 ├ page
　 │└ 各ページフォルダ
　 │　└ page.scss など
　 └ styles.scss（集約用ファイル）
</pre>


### 文字コード
HTMLに合わせ、charset宣言を行う。

	@charset "utf-8";

### フォントファミリー
フォントファミリーは以下順序で記述する。

	YuGothic, '游ゴシック', "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka,
	"ＭＳ Ｐゴシック", "MS PGothic", sans-serif;

	1. デザインカンプ指定フォント(webフォントなど)
	2. windows対応フォント
	3. Mac対応フォント
	4. windows代替フォント
	5. Mac代替フォント
	6. 総称ファミリー名　（「sans-serif」「serif」など）

### CSS記述の統一


#### 共通ルール

* 適宜改行やインデントを使用すること。
* 1つのプロパティは一行で管理する。
* 見やすさや改修を考慮し、プロパティ名はショートハンドプロパティを使用すること。

##### NG

	.selector{
	position:absolute;
	width:900px;
	padding-left:4px;
	padding-top:8px;
	padding-right:0px;
	padding-bottom:10px;
	margin-left:0;
	margin-top:10px;
	margin-right:0;
	margin-bottom:10px;
	}

##### OK

	.selector {
		position: absolute;
		width: 900px;
		padding: 4px 8px 0 10px;
		margin: 10px 0;
	}

#### クラス名

クラス名は文章構造上、意味のある名前にすること。
2単語以上の場合はアンダーバー繋ぎで記述すること。

また、レイアウト要素のクラス名は原則以下とする。

##### レイアウト
 .layout
 .container
 .inner
 .box

##### ヘッダー
 .header

##### グローバルメニュー
 .nav

##### コンテンツ
 .main
 .contents
 .wrapper
 .sub_contents

##### パンくず
 .bread_crumbs

##### フッター
 .footer

#### 強制セレクタ

強制するクラスを設定したCSS。
原則、使用しない
この強制セレクタに限り、セレクタ命名規則は適用されない。

##### <div style="text-align:center">[強制セレクタ名]</div>                                           |

#### メニューのアクティブ・非アクティブ

アクティブ時のクラス名は、`.is-active`セレクタを使うこと。

	/* 非アクティブ時 */
	ul.selector li {
		background: url("../images/uniq/bg_menu_off.png") no-repeat;
	}

	/* アクティブ時 */
	ul.selector li.is-active {
		background: url("../images/uniq/bg_menu_on.png") no-repeat;
	}

#### clear

float要素のclearには`.clearfix`を使用する。

#### 色の指定

色の指定は原則、16進数6桁で記述する。省略できるものは3桁に省略する。

##### NG

	.fc-red {
		color: red;
	}

##### OK

	.fc-red {
		color: #FF4A4A;
	}

	.fc-blue {
		color: #00F;
	}


#### コメントアウト

適宜、コメントアウトを残すこと。
その際、大きな項目ごとに見出し用のコメントアウトを入れること。

#### CSSハック（IE対応）

CSSハックは原則使用してはならない。

## ファイル名作成ルール

画像ファイル名は以下のルールとする。

* 拡張子は必須。
* imagesディレクトリ直下に格納する事を考慮し命名する。
* a 〜 z の小文字アルファベット、0 〜 9 の半角数字、- (ハイフン)、_ (アンダーバー)のみを使用する。
* 日本語を使用しない。

<pre>
[識別子] + ["_"] + ["ファイル名"] ( + ["_"] + ["詳細"] ).拡張子
</pre>

例

	bg_news_list.jpg

* 識別子が「img」の時のみ、ファイルに連番（0詰め2桁）を付けること。

例

	img_about01.jpg
	img_slide01.jpg

##### <div style="text-align:center">[識別子名一覧]</div>

|識別子 |用途                            |例                     |
|:------|:-------------------------------|:----------------------|
|ttl    |タイトル画像                    |ttl_about01.jpg        |
|nav    |メニュー画像                    |nav_top.jpg            |
|bg     |背景画像                        |bg_news_list.jpg       |
|icon   |アイコン画像                    |icon_new.jpg           |
|btn    |ボタン画像                      |btn_save.jpg           |
|img    |説明画像やスライドショー画像など|img_about01.jpg        |
|thumb  |サムネイル画像                  |thumb_product_item.jpg |






## チーム実装での決め事

### 余白
* 余白をとるのは[margin]
* 水平方向は「右」
* 鉛直方向は「下」

### SP/PCコーディング順
* SPからコーディングを行う。
* メディアクエリは min-width:〇〇px
	例）
	@media screen and (min-width: 1000px){
		.class {
			font-size: 16px;		
		}
	}