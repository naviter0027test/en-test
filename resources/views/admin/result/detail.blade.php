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
            <h3><i class="glyphicon glyphicon-globe" ></i> 成績內容</h3>
            <div class="col-xs-12">
                <p class="col-xs-12">
                    <label class="col-xs-3">中文姓名</label><span class="col-xs-9">{{ $data['nameCh'] }}</span>
                </p>
                <p class="col-xs-12">
                    <label class="col-xs-3">英文姓名</label><span class="col-xs-9">{{ $data['nameEn'] }}</span>
                </p>
                <p class="col-xs-12">
                    <label class="col-xs-3">出生日期</label><span class="col-xs-9">{{ $data['birthday'] }}</span>
                </p>
                <p class="col-xs-12">
                    <label class="col-xs-3">聯絡電話</label><span class="col-xs-9">{{ $data['tel'] }}</span>
                </p>
                <p class="col-xs-12">
                    <label class="col-xs-3">電子郵件</label><span class="col-xs-9">{{ $data['email'] }}</span>
                </p>
                <p class="col-xs-12">
                    <label class="col-xs-3">部門代號</label><span class="col-xs-9">{{ $data['departmentCode'] }}</span>
                </p>
                <p class="col-xs-12">
                    <label class="col-xs-3">員工編號</label><span class="col-xs-9">{{ $data['staffId'] }}</span>
                </p>
                <table class="contentTable2">
                    <thead>
                        <tr>
                            <td>題目</td>
                            <td>受試者回答</td>
                            <td>正解</td>
                            <td>是否正確</td>
                            <td>建立時間</td>
                            <td>修改時間</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($detailList['details'] as $detail)
                        <tr>
                            <td><a href='/admin/questions/edit/{{ $detail['questionId'] }}' target="_blank">{{ $detail['questionId'] }}</a></td>
                            <td>{{ $detail['userAns'] }}</td>
                            <td>{{ $detail['yesAns'] }}</td>
                            <td>{{ $detail['isCorrect'] == 1 ? '對' : '錯' }}</td>
                            <td>{{ $detail['created_at'] }}</td>
                            <td>{{ $detail['updated_at'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>
