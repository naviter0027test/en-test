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
            @if($result == true)
            <h3><i class="glyphicon glyphicon-globe" ></i> 應試相關設定</h3>
            <form action="/admin/setting/exam" method="post" class="contentForm1" action="./">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div>
                    <span class="col-xs-3">應試者必填欄位</span>
                    <div class="col-xs-9">
                        <p>帳號為系統必填欄位</p>
                        <label> <input type="checkbox" name="chNameIsRequire" {{ $data['chNameIsRequire'] == 'Y' ? 'checked' : '' }} /> 中文姓名 </label>
                        <label> <input type="checkbox" name="enNameIsRequire" {{ $data['enNameIsRequire'] == 'Y' ? 'checked' : '' }} /> 英文姓名 </label>
                        <label> <input type="checkbox" name="birthdayIsRequire" {{ $data['birthdayIsRequire'] == 'Y' ? 'checked' : '' }} /> 出生日期 </label>
                        <label> <input type="checkbox" name="telIsRequire" {{ $data['telIsRequire'] == 'Y' ? 'checked' : '' }} /> 聯絡電話 </label>
                        <label> <input type="checkbox" name="emailIsRequire" {{ $data['emailIsRequire'] == 'Y' ? 'checked' : '' }} /> 電子郵件 </label>
                        <label> <input type="checkbox" name="departmentIsRequire" {{ $data['departmentIsRequire'] == 'Y' ? 'checked' : '' }} /> 部門代號 </label>
                        <label> <input type="checkbox" name="staffIsRequire" {{ $data['staffIsRequire'] == 'Y' ? 'checked' : '' }} /> 員工編號 </label>
                    </div>
                </div>
<!--
                <div>
                    <span class="col-xs-3">開啟成績分析頁面</span>
                    <div class="col-xs-9">
                        <label> <input type="checkbox" /> 開啟成績分析頁面 </label>
                    </div>
                </div>
                <div>
                    <span class="col-xs-3">查詢頁面顯示筆數</span>
                    <div class="col-xs-9">
                        <select name="perPage">
                            <option value='10'>10</option>
                            <option value='20'>20</option>
                            <option value='30'>30</option>
                            <option value='40'>40</option>
                            <option value='50'>50</option>
                        </select>
                    </div>
                </div>
-->
                <div>
                    <span class="col-xs-12">請輸入欲呈現的測驗完成頁面的文字內容</span>
                    <div class="col-xs-12">
                        <textarea name="finishText">{{ $data['finishText'] }}</textarea>
                    </div>
                </div>
                <button>儲存</button>
            </form>
            @elseif($result == false)
            {{ $msg }}
            @endif
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/admin/login.js"></script>
</html>
