<html>
    <head>
        <meta charset="utf-8">
        <title>英文測驗系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/body.css' rel='stylesheet' />
        <!-- <link href='/css/admin/setting/exam.css' rel='stylesheet' /> -->
    </head>
    <body>
        <div class="header">
            <a href="/admin/setting">管理者設定</a>
            <a href="/admin/setting/exam" class="clicked">應試相關設定</a>
            <a href="/admin/questions">題庫相關</a>
            <a href="/admin/result">應試成績相關</a>
            <a href="/admin/setting/info">相關說明</a>
            <a href="/admin/logout">登出</a>
        </div>
        <div class="content">
            <h3><i class="glyphicon glyphicon-globe" ></i> 應試相關設定</h3>
            <form class="contentForm1" action="./">
                <div>
                    <span class="col-xs-3">應試者必填欄位</span>
                    <div class="col-xs-9">
                        <p>帳號為系統必填欄位</p>
                        <label> <input type="checkbox" /> 中文姓名 </label>
                        <label> <input type="checkbox" /> 英文姓名 </label>
                        <label> <input type="checkbox" /> 出生日期 </label>
                        <label> <input type="checkbox" /> 聯絡電話 </label>
                        <label> <input type="checkbox" /> 電子郵件 </label>
                        <label> <input type="checkbox" /> 部門代號 </label>
                        <label> <input type="checkbox" /> 員工編號 </label>
                    </div>
                </div>
                <div>
                    <span class="col-xs-3">開啟成績分析頁面</span>
                    <div class="col-xs-9">
                        <label> <input type="checkbox" /> 開啟成績分析頁面 </label>
                    </div>
                </div>
                <div>
                    <span class="col-xs-3">查詢頁面顯示筆數</span>
                    <div class="col-xs-9">
                        <select>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <div>
                    <span class="col-xs-12">請輸入欲呈現的測驗完成頁面的文字內容</span>
                    <div class="col-xs-12">
                        <textarea></textarea>
                    </div>
                </div>
                <button>儲存</button>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/admin/login.js"></script>
</html>
