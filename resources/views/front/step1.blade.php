<html>
    <head>
        <meta charset="utf-8">
        <title>英文測驗系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/front/body.css' rel='stylesheet' />
        <link href='/css/front/step1.css' rel='stylesheet' />
    </head>
    <body>
        <div class="content">
            <form action="/step2" class="step1Form">
                <h2 class="contentH2">受試者 資料填寫</h2>
                <p class="col-xs-12">
                    <input type="text" name="nameCh" placeholder="中文姓名" class="col-xs-12" />
                </p>
                <p class="col-xs-12">
                    <input type="text" name="nameEn" placeholder="英文姓名" class="col-xs-12" />
                </p>
                <p class="col-xs-12">
                    <input type="number" name="age" placeholder="年齡" class="col-xs-2" />
                    <span class="col-xs-3">
                        <label>
                            <input type="radio" name="age" value="1" />
                            男
                        </label>
                        <label>
                            <input type="radio" name="age" value="2" />
                            女
                        </label>
                    </span>
                    <span class="col-xs-1 birthdayLabel">生日</span>
                    <input type="date" name="birthday" class="col-xs-3" />
                </p>
                <p class="col-xs-12">
                    <input type="text" name="tel" placeholder="聯絡電話" class="col-xs-12" />
                </p>
                <p class="col-xs-12">
                    <input type="text" name="email" placeholder="E-Mail" class="col-xs-12" />
                </p>
                <p class="col-xs-12">
                    <input type="text" name="departmentCode" placeholder="部門代碼" class="col-xs-12" />
                </p>
                <p class="col-xs-12">
                    <input type="text" name="staffId" placeholder="員工編號" class="col-xs-12" />
                </p>
                <button>開始測試</button>
            </form>
        </div>
    </body>
</html>
