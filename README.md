# テンダの新卒研修用のサービス（席の変更・発表順番決定）ーキム・ヒョンギュ

### 할일

1. 데이터 베이스 클래스 만들기
2. 더미 데이터 넣기
3. 로그인
4. 회원 가입
5. 자리 범위 선택 과 학생 추가
6. 자리 결과

## 開発環境
```bash
php
```

## 説明

## 実行手順

1. このリポジトリをローカルにクローンします。

```bash
git clone https://github.com/TendaKim/tenda_presentation.git
```

2. ディレクトリに移動

```bash
cd 
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
- id auto_increment primary key
- user_id varchar() 
- user_password varchar() 
- save_seat boolean() default false
```

2. 学生
```bash
students
- user_id (foreign key)
- name varchar() 
- img varchar() null
- seat int null
```

3.前の席
```bash
before_seat
- user_id (foreign key)
- seat_row int 
- seat_column int 
```

### ファイルの構成
1. src

```bash
- db

- php

- tpl
```

2. assets

```bash
- css

- js

- img
```
