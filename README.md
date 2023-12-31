
# 掲示板アプリ「inquiry_page」
## 開発の背景
- 某企業より出題された1ヵ月期限での課題提出のため個人で制作
- 課題はお問い合わせページと管理ページのみの制作だったが、スレッド投稿機能など掲示板アプリとして必要な要素をプラスで実装していき、最終的には１つの完成された掲示板アプリとして制作した
- これが自身初のアプリ開発となる
## アプリ開発までの経過
以下2023年
- 11/15~11/16 アプリデザイン：Canvaでワイヤフレーム作成
- 11/17~11/19 『確かな力が身につくPHP「超」入門 第2版』の学習
- 11/20~11/25 『PHPフレームワークLaravel入門 第2版』の学習
- 11/28~11/30 『たった1日で基本が身に付く! Docker/Kubernetes超入門』
- 12/1~12/12 Webアプリ「掲示板」開発(制作時間：12日/138時間)
## 開発環境（ローカル）
| カテゴリ | 内容 |
| --- | --- |
| PC | Surface Pro |
| OS | Windows, Xampp |
| デザイン | (Figma), Canva(ワイヤフレーム) |
| エディター | VSCode |
| フロントエンド | HTML, CSS |
| バックエンド | PHP, Laravel |
| DB | Mysql(MariaDB) |
| バージョン管理 | Git, GitHub |
| CI/CD | - |
| サービスのURL | - |
## 「掲示板」アプリ概要
- 概要
  - 不特定ユーザ同士によるテーマ別テキスト会話アプリ
- 主な機能
  - ユーザ登録・ログイン・ログアウト機能
  - ユーザによるコメント投稿機能（各板内のページ）
  - ユーザによる新規板の作成機能（板ページ自体を作成）
  - キーワード板検索機能
  - お問合せ機能
  - 管理者によるお問合せ管理機能：フィルター、データ更新/削除
  - バリデーション機能
- DBテーブル構成（idとtimestampsを除く）
  - users（登録ユーザ）：name, email, email_verified_at(Auth), password, remember_token(Auth)
  - inquiries（お問合せ）：user_id, name, email, status, detail
  - boards（板タイトル）：user_id, name, title, story
  - t?_board型（各板のコメントテーブル）：user_id, name, comment
  - （Authによるユーザ認証関連：５テーブル）
## アプリの特徴
- ユーザ登録を行わないと、トップページ以外閲覧・利用が不可
- フォーム数の少ないシンプルな投稿フォーム
- 話題のテーマをユーザ自身で自由に立ち上げ、そのテーマ（＝板：いた）ごとのページ内でユーザ同士がテキスト会話を展開する。その際裏ではDBの板Tableが自動で追加される。
- 管理者によるDB管理
## 苦労した点、収穫、疑問点、課題
- エラー対応
  - アプリ開発につきものだとは思うが、エラーが頻発した。書籍やネット情報により都度解決し、後半ではエラーの傾向もわかり素早く対応できるようになった。
- フレームワーク（Laravel）について
  - アプリを１つ開発するだけでも、Laravelの優れた機能の多くを堪能できた。MVCモデルによるフロント/バックエンド別開発の効率化はもちろん、Bladeによる効率的なページレイアウト作成、FormRequestやModelsによるバリデーション設定とビジネスロジックなどの整理、Authによる素早いユーザ認証機能の導入、Eloquentによるモデルデータ管理など、アプリ開発における様々な技術が詰まった優れた機能の数々を実装経験できた。
  - その分多くの学習や脳の整理も必要なので、今後はさらに深く学びつつ、それらの機能を開発シナリオに合わせて上手に使い分けるスキルまで身につける必要性を感じた。
- 個人的な疑問について
  - N+1問題におけるDBテーブルのカラム設計について（withメソッド）
  - この疑問は解決済。結論、今回の場合DBテーブルのカラム名は外部キーとなるuser_idを除きダブらない方が良い
- 今後への課題（Laravel）
  - ミドルウェアの理解と活用
  - サービスプロバイダーの理解と活用
  - Eloquentとリレーションの活用
  - セッションの理解と活用
  - Laravel Sailの理解と導入
  - ユニットテストの学習と導入
## 今後の展開（個人的）
- 実際に使える掲示板アプリとして完成させる(「mookie-bbs」リポジトリに開発を移行) 
  - ペジネーションの組み込み
  - コメントに対するリプライ機能（ツリー型展開は導入しない）
  - JavaScriptを組み込み、板コメントのリアルタイム更新に対応する
  - ユーザ自身による自アカウント削除機能
  - ユーザ自身による自アカウント情報更新機能：数桁固定のランダム英数字をアプリ内で使用するユーザの固定IDとして設定し、nameやemailは途中変更できるように仕様変更する
  - 全体的なリファクタリング（Eloquentを最大限活用、DBリレーション：特にwithメソッド使用）
  - DockerとLinuxの理解を深め、Dockerで構築
  - ユニットテストの実施
  - セキュリティ面のチェック・強化
  - CI/CD（JenkinsやDockerHubなど）の設定
- 本番環境へのデプロイ（アプリ開発の一連を経験する）
