# MyBBS (掲示板)

## プロジェクト仕様

### プログラム名
	MyBBS (掲示板)

### 使用言語
	PHP
	SQL (MySQL)

### 概要
	一般的なWeb掲示板です。

### 機能
	* 一覧表示機能
	　投稿された内容を、一覧で表示する機能です。
	* 投稿機能
	　掲示板に新しく投稿する機能です。

### データ構造
	* 投稿 ID (int)
	* 投稿者 (varchar 64)
	* 投稿日時 (datetime)
	* 本文 (text)

## 動作仕様

### 一覧表示機能
	1. DBから投稿 ID の降順でデータを取得し、画面仕様通りに配置する

### 投稿機能
	1.  投稿画面に入力
	2. 「投稿」をクリック
	3.  投稿者、本文を入力内容から、投稿日時をサーバから取得し、投稿 ID を自動採番（最大値＋１）して DB に登録する
