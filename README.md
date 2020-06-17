# PHP Practice
使用 Laravel 寫出具備 CRUD 功能的 RESTful API

## 開始專案

### 條件需求
- 確認是否有安裝 PHP
    
```
php -v
```

若沒有安裝，請至 [這裏](https://www.php.net/manual/en/install.php) 安裝

- 確認是否有安裝 Composer

```
composer -V
```

若沒有安裝，請至 [這裏](https://getcomposer.org/download/) 安裝

- 確認是否有安裝 Laravel

```
php artisan -V
```

若沒有安裝，確定安裝好 Composer 後，輸入：

```
composer global require "laravel/installer"
```

- 確認是否有安裝 mySQL

```
mysql -V
```

若沒有安裝，請至 [這裏](https://dev.mysql.com/downloads/) 安裝

### 安裝
將此專案 Clone 下來後

- 初始化專案
```
composer install 
```
```
npm install
```

- 產生 app key

複製 `.env.example`，更改檔名為 `.env` 

```
php artisan key:generate
```

指令將自動把產生的鑰匙，貼至 `.env`

- 透過 artisan 指令開啟伺服器

```
php artisan serve
```

若看見 Laravel 字樣的主頁，即代表安裝成功

## 測試
此測試腳本位於 `tests/Feature/UserInfo.php`，目的為測試 CRUD 四種功能的 API

- 運行測試腳本

```
php artisan test
```

## 版本
- PHP: `v7.3.16`
- Composer: `v1.10.1`
- Laravel Framework: `v7.12.0`
- mysql: `v8.0.19`

## 作者
- Angela Wang: angela52799@gmail.com
