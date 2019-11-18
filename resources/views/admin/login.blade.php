<html>
    <head>
        <meta charset="utf-8">
        <title>英文測驗系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/body.css' rel='stylesheet' />
        <link href='/css/admin/login.css' rel='stylesheet' />
    </head>
    <body>
        <form class="loginForm" method="post" action="/admin/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <h3><i class="glyphicon glyphicon-globe" ></i> 登入</h3>
            <h5>Password:</h5>
            <p> <input type="password" name="pass" /> </p>
            <p class="loginBtnP"> <button>登入</button> </p>
        </form>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/admin/login.js"></script>
</html>
