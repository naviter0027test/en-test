<html>
    <head>
        <meta charset="utf-8">
        <title>英文測驗系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/body.css' rel='stylesheet' />
        <!-- <link href='/css/admin/setting/index.css' rel='stylesheet' /> -->
    </head>
    <body>
        <div class="header">
            <a href="/admin/setting">管理者設定</a>
            <a href="/admin/setting/exam">應試相關設定</a>
            <a href="/admin/questions">題庫相關</a>
            <a href="/admin/result">應試成績相關</a>
            <a href="/admin/setting/info" class="clicked">相關說明</a>
            <a href="/admin/logout">登出</a>
        </div>
        <div class="content">
            <h3><i class="glyphicon glyphicon-globe" ></i> 相關說明</h3>
            <div class="contentInfo1">
                <ul>
                    <li>每一次考試筆試十題</li>
                    <li>每一次考試英聽十題</li>
                    <li>一題十分</li>
                    <li>題庫管理中筆試與英聽題目至少各十題以上，不然無法測驗</li>
                    <li>相關設定可設定哪些欄位是受試者必填，還有考完試的訊息告知</li>
                    <li></li>
                </ul>
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/admin/login.js"></script>
</html>
