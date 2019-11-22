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
                    <input type="text" id="nameCh" name="nameCh" placeholder="中文姓名" class="col-xs-12" {{ $data['chNameIsRequire'] == 'Y' ? 'required' : '' }} />
                    <label for="nameCh" class="error col-xs-12"></label>
                </p>
                <p class="col-xs-12">
                    <input type="text" id="nameEn" name="nameEn" placeholder="英文姓名" class="col-xs-12" {{ $data['enNameIsRequire'] == 'Y' ? 'required' : '' }} />
                    <label for="nameEn" class="error col-xs-12"></label>
                </p>
                <p class="col-xs-12">
                    <!-- <input type="number" id="age" name="age" placeholder="年齡" class="col-xs-2" />
                    <span class="col-xs-3">
                        <label>
                            <input type="radio" id="gender_male" name="gender" value="1" required />
                            男
                        </label>
                        <label>
                            <input type="radio" id="gender_female" name="gender" value="2" required />
                            女
                        </label>
                    </span>
                    -->
                    <span class="col-xs-1 birthdayLabel">生日</span>
                    <input type="date" id="birthday" name="birthday" class="col-xs-3" {{ $data['birthdayIsRequire'] == 'Y' ? 'required' : '' }} />
                    <!-- <label for="age" class="error col-xs-12"></label>
                    <label for="gender_male" class="error col-xs-12"></label>
                    <label for="gender_female" class="error col-xs-12"></label>
-->
                    <label for="birthday" class="error col-xs-12"></label>
                </p>
                <p class="col-xs-12">
                    <input type="text" id="tel" name="tel" placeholder="聯絡電話" class="col-xs-12" {{ $data['telIsRequire'] == 'Y' ? 'required' : '' }} />
                    <label for="tel" class="error col-xs-12"></label>
                </p>
                <p class="col-xs-12">
                    <input type="text" id="email" name="email" placeholder="E-Mail" class="col-xs-12" {{ $data['emailIsRequire'] == 'Y' ? 'required' : '' }} />
                    <label for="email" class="error col-xs-12"></label>
                </p>
                <p class="col-xs-12">
                    <input type="text" id="departmentCode" name="departmentCode" placeholder="部門代碼" class="col-xs-12" {{ $data['departmentIsRequire'] == 'Y' ? 'required' : '' }} />
                    <label for="departmentCode" class="error col-xs-12"></label>
                </p>
                <p class="col-xs-12">
                    <input type="text" id="staffId" name="staffId" placeholder="員工編號" class="col-xs-12" {{ $data['staffIsRequire'] == 'Y' ? 'required' : '' }} />
                    <label for="staffId" class="error col-xs-12"></label>
                </p>
                <div class="nextPanel">
                    <button>開始測試</button>
                </div>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/lib/jquery-validation/dist/localization/messages_zh_TW.min.js"></script>
    <script src="/js/front/step1.js"></script>
</html>
