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
            <a href="/admin/setting/exam">應試相關設定</a>
            <a href="/admin/questions" class="clicked">題庫相關</a>
            <a href="/admin/result">應試成績相關</a>
            <a href="/admin/setting/info">相關說明</a>
            <a href="/admin/logout">登出</a>
        </div>
        <div class="content">
            <h3><i class="glyphicon glyphicon-globe" ></i> 題庫相關</h3>
            <a class="addItem" href="/admin/questions/create">
                <i class="glyphicon glyphicon-plus" ></i>
                新增題目
            </a>
            <table class="contentTable1">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>題目類型</td>
                        <td>建立時間</td>
                        <td>修改時間</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['typeShow'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                        <td>{{ $item['updated_at'] }}</td>
                        <td>
                            <a href="/admin/questions/edit/{{ $item['id'] }}">
                                <i class="glyphicon glyphicon-file" ></i>
                            </a>
                            <a href="/admin/questions/del/{{ $item['id'] }}">
                                <i class="glyphicon glyphicon-remove" ></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination paginationCenter">
            @for($i = 0; $i < ceil($amount / $offset); ++$i)
                @if(($i+1) == $nowPage)
                <label>{{ $i+1 }}</label>
                @elseif(($i+1) != $nowPage)
                <a href="/admin/questions/?nowPage={{ $i+1 }}">{{ $i+1 }}</a>
                @endif
            @endfor
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>
