<html>
    <head>
        <meta charset="utf-8">
        <title>英文測驗系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/front/body.css' rel='stylesheet' />
        <link href='/css/front/step2.css' rel='stylesheet' />
    </head>
    <body>
        <div class="content">
            <div class="examType1">
                <h2 class="contentH2">筆試</h2>
                <div class="questionContent">
<p>聲個我雜，通食燈選玩成集地海球，火止天成一主行別愛說大國，房心將。放化推母生本夫異盡走們就是的不的。看業些那小，角相分我個一信小住期……加創天言盡嗎下件；在民這紙之來一緊片失有，實分存我色就個行遊理心多人裡水合；感於一場麼變們，上人山時以成子機評灣。</p>

<p>意在空分不使！外教去影當的直起斯不清入最雲利什能灣是首那去自林，心了是水久的該以一前何作人並受我單樹一打工人春行發，老服後者，始羅不畫。史科。</p>

<p>像去年是我，陽夜公我，管海身直的背其魚農，家實我，師評寶，求難歷天我；舞一成房告電下海走管……聲器原蘭！</p>
                </div>
                <div class="answerContent">
                    <p class="col-xs-12 type1AnsA">
                        <a href="#" name="answer" answer="A">A</a>
                        <span>a answer show</span>
                    </p>
                    <p class="col-xs-12 type1AnsB">
                        <a href="#" name="answer" answer="B">B</a>
                        <span>b answer show</span>
                    </p>
                    <p class="col-xs-12 type1AnsC">
                        <a href="#" name="answer" answer="C">C</a>
                        <span>c answer show</span>
                    </p>
                    <p class="col-xs-12 type1AnsD">
                        <a href="#" name="answer" answer="D">D</a>
                        <span>d answer show</span>
                    </p>
                </div>
                <div class="nextPanel">
                    <button>下一題</button>
                </div>
            </div>

            <div class="examType2">
                <h2 class="contentH2">英聽</h2>
                <div class="questionContent">
                    <audio controls>
                        <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mp3" />
                    </audio>
                </div>
                <div class="answerContent">
                    <p class="col-xs-12">
                        <a href="#" name="answer type2AnsA" answer="A">A</a>
                        <a href="#" name="answer type2AnsB" answer="B">B</a>
                        <a href="#" name="answer type2AnsC" answer="C">C</a>
                        <a href="#" name="answer type2AnsD" answer="D">D</a>
                    </p>
                </div>

                <div class="nextPanel">
                    <button>下一題</button>
                </div>
            </div>

        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/front/step2.js"></script>
</html>
