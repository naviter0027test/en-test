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
            <h3><i class="glyphicon glyphicon-globe" ></i> 新增題目</h3>
            <div class="col-xs-12">
                <h4>試題分類</h4>
                <label class="col-xs-3"><input type="radio" name="typeChoose" value="1" />筆試</label>
                <label class="col-xs-3"><input type="radio" name="typeChoose" value="2" />英聽</label>
            </div>
            <form method="post" action="/admin/questions/create" class="contentForm1 type1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="type" value="1" />
                <div class="col-xs-12">
                    <span class="col-xs-12">試題內容</span>
                    <textarea id="content" name="content"></textarea>
                    <label for="content" class="error col-xs-12"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項數量</span>
                    <select name="howMany" class="correctItemSet">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項A答案</span>
                    <input type="text" id="a" name="a" class="col-xs-8" />
                    <label for="a" class="error col-xs-12"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項B答案</span>
                    <input type="text" id="b" name="b" class="col-xs-8" />
                    <label for="b" class="error col-xs-12"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項C答案</span>
                    <input type="text" id="c" name="c" class="col-xs-8" />
                    <label for="c" class="error col-xs-12"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項D答案</span>
                    <input type="text" id="d" name="d" class="col-xs-8" />
                    <label for="d" class="error col-xs-12"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項E答案</span>
                    <input type="text" id="e" name="e" class="col-xs-8" />
                    <label for="e" class="error col-xs-12"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">正確答案</span>
                    <select name="ans" class="correctItemSet">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
                <button>儲存</button>
            </form>
            <form method="post" action="/admin/questions/create" enctype="multipart/form-data" class="contentForm1 type2">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="type" value="2" />
                <div class="col-xs-12">
                    <span class="col-xs-12">試題內容</span>
                    <input type="file" name="path" />
                    <label for="path" class="error"></label>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項數量</span>
                    <select name="howMany" class="correctItemSet">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">正確答案</span>
                    <select name="ans" class="correctItemSet">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
                <button>儲存</button>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/lib/jquery-validation/dist/localization/messages_zh_TW.min.js"></script>
    <script src="/js/admin/questions/create.js"></script>
</html>
