#第一次使用專案
1.將整專案clone下來，裡面包刮了我在我的電腦建好的laravel project(Laravel 5.3)，之後進行下步驟
   
```
很重要，靠杯重要 by 逸中

git clone https://github.com/superTO/Translator.git

切換到專案根目錄，執行以下指令

composer install
```
    
2.有關於.env檔的設定:

將.env.example 改成 .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead <-改成你的database名
DB_USERNAME=homestead <-改成你的MySQL帳號
DB_PASSWORD=secret <-改成你的MySQL密碼
```

# Git 的使用:

1. 每次git順序
    * 先 pull github 檔案同步進本機
        1. 先用cd切換到專案根目錄
        2. ```git pull```(將檔案全部抓下來到自己電腦中，避免下次git更新時出錯)
    
     【做 coding】
    * coding 完後，將專案 push 同步回 github
        1. ```git add .```(記得要有空白在"add" 和 "."之間)(偵測全部專案有被更動到的地方)// "."
        2. ```git commit -m "your commit message"```(commit這次更動，並註解)
        3. ```git push"```(push這次的更動到github上)
        4. 完成，可去 github 上看更動了哪些部分

# 第一次建資料表:
1. 先自行創立一個資料庫(p.s.記得這個資料庫名稱要和.env中的```DB_DATABASE```)的值一樣
2. cd 到專案根目錄底下執行下列指令
    * ```php artisan migrate```
3. 這樣就能將我打資料表建起來
4. 如需修改資料結構(新增、刪除...等)，再連絡昶丞同學，勿直接改會出錯!!感恩!!!

# 各資料欄位說明:
## users table:
* id -> 全部使用網站的人的id
* account ->　user 帳號
* password -> user 密碼
* name -> user 名子／公司名稱
* role -> phone_number 電話號碼
* ssn ->　身分證字號／公司行號

## documents table
* id ->　全部文件id
* document_name ->　文件標題名(ex:國立中正大學外國學生獎學金實施要點)
* text_name -> 文件檔名(ex: laws.txt)
* due_date ->　uploader 預期之日期
* original_language -> 原文件語言
* translated_language -> 欲翻譯後的語言
* document_type ->　欲翻譯之文件類型(學術、法規...)
* uploader_user_id -> 上傳者欲翻譯文件者的id(已與users table的id連動)
* translation_type -> 文件翻譯之狀態(未翻,一校...)
* translator1_id ->　第一位翻譯者其id(可空)
* translator2_id ->　第二位翻譯者其id(可空)
* translator3_id ->　第三位翻譯者其id(可空)
* translator4_id ->　第四位翻譯者其id(可空)
* payment_type -> 付費情況(未付、已付)

# 資料表的權限說明:
##資料表 users:
* role:
    ```
    0 -> superadmin
    
    1 -> user
    
    2 -> pm
    
    3 -> translators
    
    ```

##資料表 documents
* translation_type:
    ```
    0 -> 未處理
    
    1 -> 一校
    
    2 -> 二校
    
    3 -> 三校
    
    4 -> 處理完成
    
    ```
* payment_type:
    ```
    0 -> 未付款
    
    1 -> 已付款
    
    ```

# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Gary is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
