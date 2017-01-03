#第一次使用專案
1.將整專案clone下來，裡面包刮了我在我的電腦建好的laravel project(Laravel 5.3)，之後進行下步驟
   
```
很重要，靠杯重要 by 逸中

git clone https://github.com/superTO/Translator.git

切換到專案根目錄，執行以下指令

composer install
```
    
2.有關於.env檔的設定:

將.env.example 「複製一份」把他改成 .env
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
* email ->　user 信箱
* role -> 各權限請參照下方「資料表的權限說明」
* phone_number -> user 電話號碼
* ssn ->　身分證字號／公司行號

## documents table
* id ->　全部文件id
* document_name ->　文件標題名(ex:國立中正大學外國學生獎學金實施要點)
* text_name -> 文件檔名(ex: laws.txt)
* due_date ->　uploader 預期之日期
* original_language -> 原文件語言
* translated_language -> 欲翻譯後的語言
* document_type ->　欲翻譯之文件類型(學術、法規...)
* upload_user_id -> 上傳者欲翻譯文件者的id(已與users table的id連動)
* translation_type -> 文件翻譯之狀態(未翻、一校...)
* translator1_id ->　第一位翻譯者其id(可空)
* translator2_id ->　第二位翻譯者其id(可空)
* translator3_id ->　第三位翻譯者其id(可空)
* translator4_id ->　第四位翻譯者其id(可空)
* payment_type -> 付費情況(未付、已付)
* remark -> user自己打的備註

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
    
    10 -> 已 valuation 過
    
   ```
* document_type(暫定):
    ```
    0 -> 學術
    
    1 -> 法律
    
    2 -> 體育
    
    3 -> 其他
    
    ```

# 建立SuperAdmin測試帳號
```
php artisan make:seeder UsersTableSeederAdmin
php artisan db:seed --class=UsersTableSeederAdmin

執行以上指令後就可以用以下資訊登錄

帳號:admin
密碼:adminPassword
```
*ps:當Login功能寫好就能測試了

# 測試mail發送
```
要先去mailtrap,用github登入
點選跳轉業面後的 Demo inbox
然後將
Username:
Password:
貼到.env裡面的
MAIL_USERNAME=
MAIL_PASSWORD=
即可寄信囉

PS.要記得弄一個PM權限的帳號 不然撈不到email
```

#更改前端字串
```
由於多語言  前端頁面的字串都變成了 @lang('....')
顯示的文字是儲存在 
resourse\lang\en
resourse\lang\zh_tw
如果要更改文字要到那兩個資料夾內修改，不要直接改view的東西
```
```
ex. @lang('admin.Account_List')
對應到 resourse\lang\en\admin.php
    'Account_List' => 'Account List',
與 resourse\lang\zh_tw\admin.php
    'Account_List' => '帳戶列表',



```


