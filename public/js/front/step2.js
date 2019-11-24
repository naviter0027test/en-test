$(document).ready(function() {
    var exam = [];
    var type1Count = 0;
    var type2Count = -1;
    var questionArr = ['A', 'B', 'C', 'D', 'E'];
    var caseSmallArr = ['a', 'b', 'c', 'd', 'e'];

    function startExam() {
        $('.examType2').hide();
        var question = exam['type1'][type1Count]['content']
        $('.examType1 .questionContent').html(question);
        $('.examType1 .answerContent').html('');
        var howMany = parseInt(exam['type1'][type1Count]['howMany']);
        for(var i = 0;i < howMany; ++i) {
            var p = document.createElement('p');
            var ans = document.createElement('a');
            var span = document.createElement('span');
            $(p).addClass('col-xs-12');
            $(ans).attr('href', '#');
            $(ans).attr('name', 'answer');
            $(ans).attr('answer', questionArr[i]);
            $(ans).text(questionArr[i]);
            $(span).text(exam['type1'][type1Count][caseSmallArr[i]]);
            $(ans).on('click', function() {
                $('.examType1 .answerContent a').removeClass('clicked');
                $(this).addClass('clicked');
                return false;
            });
            $(p).append(ans);
            $(p).append(span);
            $('.examType1 .answerContent').append(p);
        }
    }

    function nextType1Exam() {
        type1Count += 1;
        var question = exam['type1'][type1Count]['content']
        $('.examType1 .questionContent').html(question);
        $('.examType1 .answerContent').html('');
        var howMany = parseInt(exam['type1'][type1Count]['howMany']);
        for(var i = 0;i < howMany; ++i) {
            var p = document.createElement('p');
            var ans = document.createElement('a');
            var span = document.createElement('span');
            $(p).addClass('col-xs-12');
            $(ans).attr('href', '#');
            $(ans).attr('name', 'answer');
            $(ans).attr('answer', questionArr[i]);
            $(ans).text(questionArr[i]);
            $(span).text(exam['type1'][type1Count][caseSmallArr[i]]);
            $(ans).on('click', function() {
                $('.examType1 .answerContent a').removeClass('clicked');
                $(this).addClass('clicked');
                return false;
            });
            $(p).append(ans);
            $(p).append(span);
            $('.examType1 .answerContent').append(p);
        }
    }

    function nextType2Exam() {
        type2Count += 1;
        var fileName = "/uploads/" + exam['type2'][type2Count]['title'];
        $('.examType2 .questionContent audio source').attr('src', fileName);
        console.log($('.examType2 .questionContent audio source').attr('src'));
        $('.examType2 .questionContent audio')[0].load();
        $('.examType2 .answerContent').html('');
        var howMany = parseInt(exam['type2'][type2Count]['howMany']);
        var p = document.createElement('p');
        $(p).addClass('col-xs-12');
        for(var i = 0;i < howMany; ++i) {
            var ans = document.createElement('a');
            $(ans).attr('href', '#');
            $(ans).attr('name', 'answer');
            $(ans).attr('answer', questionArr[i]);
            $(ans).text(questionArr[i]);
            $(ans).on('click', function() {
                $('.examType2 .answerContent a').removeClass('clicked');
                $(this).addClass('clicked');
                return false;
            });
            $(p).append(ans);
        }
        $('.examType2 .answerContent').append(p);
    }

    $.get('/questions', function(data) {
        if(data.result == true) {
            exam = data.data;
            startExam();
        }
    });

    $('.examType1 .nextPanel button').on('click', function() {
        if($('.examType1 .answerContent a').hasClass('clicked') == false) {
            alert('請選擇答案');
            return false;
        }
        exam['type1'][type1Count]['userAns'] = $('.examType1 .answerContent a.clicked').attr('answer');
        if(type1Count < 9)
            nextType1Exam();
        else {
            $('.examType1').hide();
            $('.examType2').show();
            nextType2Exam();
        }
    });

    $('.examType2 .nextPanel button').on('click', function() {
        if($('.examType2 .answerContent a').hasClass('clicked') == false) {
            alert('請選擇答案');
            return false;
        }
        exam['type2'][type2Count]['userAns'] = $('.examType2 .answerContent a.clicked').attr('answer');
        if(type2Count < 9)
            nextType2Exam();
        else {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var postData = {};
            postData['exam'] = exam;
            postData['birthday'] = sessionStorage.getItem('birthday');
            postData['departmentCode'] = sessionStorage.getItem('departmentCode');
            postData['email'] = sessionStorage.getItem('email');
            postData['nameCh'] = sessionStorage.getItem('nameCh');
            postData['nameEn'] = sessionStorage.getItem('nameEn');
            postData['staffId'] = sessionStorage.getItem('staffId');
            postData['tel'] = sessionStorage.getItem('tel');
            $.post('/user-answer', postData, function(userAnsResult) {
                if(userAnsResult.result == true)
                    location.href = '/step3';
                else
                    alert(userAnsResult.msg);
            })
            .fail(function(errorData) {
                console.log(errorData);
            });
        }
    });
});
