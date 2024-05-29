# テンダの新卒研修用のサービス（席の変更・発表順番決定）ーキム・ヒョンギュ

## 開発環境
```bash
Laravel v11
```

## 説明

## 実行手順

1. このリポジトリをローカルにクローンします。

```bash
git clone https://github.com/emptyTakahashi/Gohan.git
```

2. 初期環境のセットアップ

```bash
# プロジェクトディレクトリに移動
cd (省略)/tenda_presentation/tenda-hk/

# Composerパッケージのインストール
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

# .envファイルの作成
## .env.exampleをコピー
cp .env.example ./.env

## .envの修正(22行目から)
##### 修正前
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

##### 修正後
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

# sailを起動
sail up -d

# APP_KEYの生成
sail php artisan key:generate

# テーブルの作成
sail php artisan migrate

# NPMコマンドでパッケージのインストール
sail npm install

# 開発時なのでdevを指定して初期環境のセットアップを完了します
sail npm run dev
```

3. URLにアクセス

```
http://localhost/
```

## 構成

### データの構成
1. 利用者
```bash
users
- id auto_increment
- user_id varchar() 
- user_password varchar() 
- save boolean default false 
```

2. 学生
```bash
students
- user_id (foreign key)
- name varchar() 
- img varchar() null
- before_seat int null
```

3.前の席
```bash
before_seat
- user_id (foreign key)
- row int 
- coulumn int 
```

### ファイルの構成
1. View
```bash
login.php // ログイン
register.php // 新規登録
start.php // メイン画面
save_user.php // 学生の修正
select_seat.php // 席の決定画面
done.php // 結果確認
```
2. ルーター
```bash
web.php
```

3. コントロール
```bash
StudentController.php // 学生の修正の処理
SeatController.php // 席の決定の処理
```

4. Seeder
```bash
Users
- user_id kudo
- user_password kudokudo

Students
- user_id 1
- name 김형규
- img

```

