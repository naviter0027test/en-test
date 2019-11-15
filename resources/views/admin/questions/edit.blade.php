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
            <h3><i class="glyphicon glyphicon-globe" ></i> 編輯題目</h3>
            @if(isset($data['id']) == false)
            <div class="col-xs-12">
                Not Found
            </div>
            @elseif($data['type'] == 1)
            <form method="post" action="/admin/questions/edit" class="contentForm1 type1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="type" value="1" />
                <div class="col-xs-12">
                    <span class="col-xs-12">試題內容</span>
                    <textarea name="content">{{ $data['content'] }}</textarea>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項數量</span>
                    <select name="howMany" class="correctItemSet">
                        <option value="1" {{ $data['howMany'] == 1 ? 'selected' : '' }} >1</option>
                        <option value="2" {{ $data['howMany'] == 2 ? 'selected' : '' }} >2</option>
                        <option value="3" {{ $data['howMany'] == 3 ? 'selected' : '' }} >3</option>
                        <option value="4" {{ $data['howMany'] == 4 ? 'selected' : '' }} >4</option>
                        <option value="5" {{ $data['howMany'] == 5 ? 'selected' : '' }} >5</option>
                    </select>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項A答案</span>
                    <input type="text" name="a" value="{{ $data['a'] }}" class="col-xs-8" />
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項B答案</span>
                    <input type="text" name="b" value="{{ $data['b'] }}" class="col-xs-8" />
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項C答案</span>
                    <input type="text" name="c" value="{{ $data['c'] }}" class="col-xs-8" />
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項D答案</span>
                    <input type="text" name="d" value="{{ $data['d'] }}" class="col-xs-8" />
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項E答案</span>
                    <input type="text" name="e" value="{{ $data['e'] }}" class="col-xs-8" />
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">正確答案</span>
                    <select name="ans" class="correctItemSet">
                        <option value="A" {{ $data['ans'] == 'A' ? 'selected' : '' }} >A</option>
                        <option value="B" {{ $data['ans'] == 'B' ? 'selected' : '' }} >B</option>
                        <option value="C" {{ $data['ans'] == 'C' ? 'selected' : '' }} >C</option>
                        <option value="D" {{ $data['ans'] == 'D' ? 'selected' : '' }} >D</option>
                        <option value="E" {{ $data['ans'] == 'E' ? 'selected' : '' }} >E</option>
                    </select>
                </div>
                <button>儲存</button>
            </form>
            @elseif($data['type'] == 2)
            <form method="post" action="/admin/questions/create" enctype="multipart/form-data" class="contentForm1 type2">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="type" value="2" />
                <div class="col-xs-12">
                    <span class="col-xs-6">試題內容(若要更換，請再上傳新檔)</span>
                    <label class="col-xs-6">{{ $data['title'] }}</label>
                    <input type="file" name="path" />
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">選項數量</span>
                    <select name="howMany" class="correctItemSet">
                        <option value="1" {{ $data['howMany'] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ $data['howMany'] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ $data['howMany'] == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ $data['howMany'] == 4 ? 'selected' : '' }}>4</option>
                        <option value="5" {{ $data['howMany'] == 5 ? 'selected' : '' }}>5</option>
                    </select>
                </div>
                <div class="col-xs-12">
                    <span class="col-xs-3">正確答案</span>
                    <select name="ans" class="correctItemSet">
                        <option value="A" {{ $data['ans'] == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ $data['ans'] == 'B' ? 'selected' : '' }}>B</option>
                        <option value="C" {{ $data['ans'] == 'C' ? 'selected' : '' }}>C</option>
                        <option value="D" {{ $data['ans'] == 'D' ? 'selected' : '' }}>D</option>
                        <option value="E" {{ $data['ans'] == 'E' ? 'selected' : '' }}>E</option>
                    </select>
                </div>
                <button>儲存</button>
            </form>
            @endif
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/admin/questions/edit.js"></script>
</html>
