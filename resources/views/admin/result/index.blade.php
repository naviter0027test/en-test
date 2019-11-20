<html>
    <head>
        <meta charset="utf-8">
        <title>英文測驗系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/body.css' rel='stylesheet' />
        <!-- <link href='/css/admin/result/index.css' rel='stylesheet' /> -->
    </head>
    <body>
        <div class="header">
            <a href="/admin/setting">管理者設定</a>
            <a href="/admin/setting/exam">應試相關設定</a>
            <a href="/admin/questions">題庫相關</a>
            <a href="/admin/result" class="clicked">應試成績相關</a>
            <a href="/admin/setting/info">相關說明</a>
            <a href="/admin/logout">登出</a>
        </div>
        <div class="content">
            <h3><i class="glyphicon glyphicon-globe" ></i> 查詢成績</h3>
            <p class="col-xs-12 redNote">選擇條件後，點擊查詢即可顯示內容<p>
            <hr class="col-xs-11 hrReset" />
            <form action="./" class="col-xs-12 contentForm2">
                <p class="col-xs-12">
                    <label><input type="radio" />求職人員</label>
                    <label><input type="radio" />在職員工</label>
                    <label>身份證字號</label><input type="text" />
                </p>
                <p class="col-xs-12">
                    <label>中文姓名</label><input type="text" />
                    <label>英文姓名</label><input type="text" />
                </p>
                <p class="col-xs-12">
                    <label>測驗日期</label>
                    <select>
                        <option>選擇</option>
                    </select>
                    <input type="date" />
                    <input type="date" />
                </p>
                <p class="col-xs-12">
                    <label><input type="radio" />總分</label>
                    <label><input type="radio" />聽力成績</label>
                    <label><input type="radio" />閱讀成績</label>
                    <input type="text" />至<input type="text" />分
                </p>
                <p class="col-xs-12">
                    <input type="checkbox" />通過標準: <label><input type="radio" />是</label><label><input type="radio" />否</label>
                </p>
                <p class="col-xs-12 searchBtn">
                    <button>查詢</button>
                </p>
            </form>
            <table class="contentTable2">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>身份證字號</td>
                        <td>中文姓名/英文姓名</td>
                        <td>總分</td>
                        <td>測驗別</td>
                        <td>測驗時間</td>
                        <td>成績</td>
                        <td>最高學歷</td>
                        <td>（應徵）職務</td>
                        <td>資料</td>
                        <td><input type="checkbox" /></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">1</td>
                        <td rowspan="2">A123456789</td>
                        <td rowspan="2">中文姓名/英文姓名</td>
                        <td rowspan="2">245</td>
                        <td rowspan="1">聽力</td>
                        <td rowspan="1">測驗時間</td>
                        <td rowspan="1">成績</td>
                        <td rowspan="2">最高學歷</td>
                        <td rowspan="2">（應徵）職務</td>
                        <td rowspan="2"><a href="#">資料</a></td>
                        <td rowspan="2"><input type="checkbox" /></td>
                    </tr>
                    <tr>
                        <td rowspan="1">閱讀</td>
                        <td rowspan="1">測驗時間</td>
                        <td rowspan="1">成績</td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">
                <label>1</label>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
            <div class="pageData1">
                共1筆資料/共1頁
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>