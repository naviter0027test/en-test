<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>score output</title>
    </head>
    <style>
        @font-face {
            font-family: 'wt024';
            font-style: normal;
            font-weight: normal;
            src: url({{ storage_path('font/wt024.ttf') }}) format('truetype');
        }
        body {
            font-family: wt024, DejaVu Sans,sans-serif;
        }
    </style>
    <body>
        <p>成績匯出</p>
        <table width="100%" style="width:100%" border="0">
            <thead>
                <tr>
                    <td>No</td>
                    <td>中文姓名/英文姓名</td>
                    <td>答題總數</td>
                    <td>總分</td>
                    <td>測驗別</td>
                    <td>答對題數</td>
                    <td>成績</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td rowspan="2">{{ $item['id'] }}</td>
                    <td rowspan="2">{{ $item['nameCh'] }}/{{ $item['nameEn'] }}</td>
                    <td rowspan="2">{{ $item['sum'] }}</td>
                    <td rowspan="2">{{ $item['score'] }}</td>
                    <td rowspan="1">聽力</td>
                    <td rowspan="1">{{ $item['detailList']['type2YesSum'] }}</td>
                    <td rowspan="1">{{ $item['detailList']['type2YesScore'] }}</td>
                </tr>
                <tr>
                    <td rowspan="1">閱讀</td>
                    <td rowspan="1">{{ $item['detailList']['type1YesSum'] }}</td>
                    <td rowspan="1">{{ $item['detailList']['type1YesScore'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
