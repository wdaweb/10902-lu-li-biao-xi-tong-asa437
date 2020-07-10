# 履歷介紹
## 1.	CakeResume 網址:
https://www.cakeresume.com/s--hhVvcuzbm-cCbQQQLpHEfQ--/asaliu
<hr>

## 2.	作品集計畫:
### 萬年曆: php、mysql、html、css
#### 統一發票對獎: php、html、css、mysql
#### 二選一大哉問: html、Java script、css
#### 類比時鐘: html、Java script、css
#### 顏色好好玩: html、Java script、css
#### LOGO設計: Photoshop、Illustrator
<hr>

## 3.	視覺計畫: 
#### 牆面卡片風格，黑暗牆面貼上置中亮白灰的卡片作強列對比呈現，內容區在燈光照射下呈現明顯的黑。並有藍色nav選單可供點選，亮眼黃色回首頁，帥氣個人照賞心稅目。
<hr>

## 4.	資料庫規劃:
#### 依據藍色選單區各別具有前後台及資料庫連結(個人簡介、求職條件、技能、經驗、學歷、作品集、自傳)。
#### 資料庫設計:
* 個人簡介(me資料表):textarea可修改/重置功能
* 求職條件(jobc 資料表):text可修改/重置功能
* 技能(skill 資料表):圖片可新增/修改/重置/更換/顯示/刪除
* 經驗(exp 資料表): text可修改/重置功能
* 學歷(edub 資料表): text可修改/重置功能
* 作品集(balb 資料表): 圖片可新增/修改/重置/更換/顯示/刪除
* 自傳(autob 資料表): textarea可修改/重置功能
 <hr>

## 5.	功能規劃
#### 前台:主要提供前台nav表單頁面呈現，使用url?do=xyz作include連結front資料夾&各別php資料。作成前後台分離。
#### 後台:需登入帳號。主要是讓管理者作修改及維護，相關聯有backend、api、modal與其作資料庫串接。
#### api:
* edit_me.php : 自傳api
* edit_jobc.php: 求職條件aip
* edit.php: 更換圖api
* add.php: 新增圖api
* edit_exp.php: 經驗api
* edit_edub.php: 學歷api
* edit_atuob.php: 自傳api
* chk_acc.php: 帳號確認api
* chk_pw.php:密碼確認api
* logout.php: 登出功能
