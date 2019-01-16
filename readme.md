<p align="center"><img src="https://i.imgur.com/zooZz0l.jpg"></p>

# 民宿訂房網站

讓消費者除了在訂房之餘，同時也能充分了解到澎湖各種風情的網站。

## 系統作用：

- 民宿簡介，讓消費者更清楚瞭解本民宿。
- 房型介紹，充分介紹房間，不會有到當場才發現很失望的情形。
- 線上訂房，可以線上完成房間訂購。
- 行程規劃，介紹民宿知道的遊玩行程規劃，供消費者了解參考。
- 回憶紀錄，運用社群網站(Instaram)連結出到澎湖各地遊玩的旅客，展現出本民宿貼近消費者的生活感。
- 後台，管理人員可以查看線上訂房或行程規劃的顯示,新增,刪除,修改。

## 系統主要功能：

-關於我們頁面設計：Route:/about(陳姿婷)
-房型介紹頁面設計：Route:/rooms(陳姿婷)
-線上訂房頁面設計：Route:/booking(陳冠宇)
-行程規劃頁面設計：Route:/trip(陳姿婷)
-回憶紀錄頁面設計：Route:/review(陳冠宇)
-後台管理頁面設計：Route:/admin(陳冠宇)
-後台訂房管理設計：Route:/admin/booking、edit、destroy(陳冠宇)
-後台行程管理設計：Route:/admin/tripdetail、edit、destroy(陳姿婷)

## 初始專案與DB負責的同學：
初始專案、資料表、資料表關聯設計：陳冠宇
資料建立：陳姿婷

## 額外使用的套件或模板：
Clean Blog模板--首頁美觀用
Side Bar模板--後台管理用

## 系統復原步驟：
1. > clone下來本專案。
2. > Cmder先cd進本專案，然後輸入composer install。
3. >再輸入copy .env.example .env，以及artisan key:generate。
4. > 調整.env內容：DB_PORT=33060、DB_DATABASE=final05、DB_USERNAME=root、DB_PASSWORD=root
5. > 開啟UwAmp，點擊PHPMyAdmin，照著剛剛.env輸入的資料作登入。
6. > 點擊建立資料庫，名稱輸入：final05。
7. > 建立完成後，點擊左邊的匯入紐，選擇檔案找到final05資料夾內的database資料夾，選擇final05.sql，執行。
8. > 開啟UwAmp，點擊Browser www，開始瀏覽！

##系統使用帳號：
後台登入使用帳號：coco214034@gmail.com，密碼：123456

##系統開發人員：
國立勤益科技大學 資訊管理系
四資三乙-3A532081-陳冠宇
四資三乙-3A532059-陳姿婷