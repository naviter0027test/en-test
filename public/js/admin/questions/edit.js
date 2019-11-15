$(document).ready(function() {
    var rule1 = {
        'rules': {
            'content': { 'required': true },
        },
        'messages': {
            'content': { 'required': '必填', },
            'a': { 'required': '必填', },
            'b': { 'required': '必填', },
            'c': { 'required': '必填', },
            'd': { 'required': '必填', },
            'e': { 'required': '必填', }
        },
        submitHandler: function(form) {
            var howMany = $(".type1 [name=howMany]").val();
            switch(howMany) {
                case '1':
                    console.log($("[name=a]").val().trim());
                    if($("[name=a]").val().trim() == '') {
                        $("[for=a]").text('必填');
                        $("[for=a]").show();
                        return false;
                    }
                    else
                        $("[for=a]").text('');
                    break;
                case '2':
                    if($("[name=a]").val().trim() == '') {
                        $("[for=a]").text('必填');
                        $("[for=a]").show();
                        return false;
                    }
                    else
                        $("[for=a]").text('');
                    if($("[name=b]").val().trim() == '') {
                        $("[for=b]").text('必填');
                        $("[for=b]").show();
                        return false;
                    }
                    else
                        $("[for=b]").text('');
                    break;
                case '3':
                    if($("[name=a]").val().trim() == '') {
                        $("[for=a]").text('必填');
                        $("[for=a]").show();
                        return false;
                    }
                    else
                        $("[for=a]").text('');
                    if($("[name=b]").val().trim() == '') {
                        $("[for=b]").text('必填');
                        $("[for=b]").show();
                        return false;
                    }
                    else
                        $("[for=b]").text('');
                    if($("[name=c]").val().trim() == '') {
                        $("[for=c]").text('必填');
                        $("[for=c]").show();
                        return false;
                    }
                    else
                        $("[for=c]").text('');
                    break;
                case '4':
                    if($("[name=a]").val().trim() == '') {
                        $("[for=a]").text('必填');
                        $("[for=a]").show();
                        return false;
                    }
                    else
                        $("[for=a]").text('');
                    if($("[name=b]").val().trim() == '') {
                        $("[for=b]").text('必填');
                        $("[for=b]").show();
                        return false;
                    }
                    else
                        $("[for=b]").text('');
                    if($("[name=c]").val().trim() == '') {
                        $("[for=c]").text('必填');
                        $("[for=c]").show();
                        return false;
                    }
                    else
                        $("[for=c]").text('');
                    if($("[name=d]").val().trim() == '') {
                        $("[for=d]").text('必填');
                        $("[for=d]").show();
                        return false;
                    }
                    else
                        $("[for=d]").text('');
                    break;
                case '5':
                    if($("[name=a]").val().trim() == '') {
                        $("[for=a]").text('必填');
                        $("[for=a]").show();
                        return false;
                    }
                    else
                        $("[for=a]").text('');
                    if($("[name=b]").val().trim() == '') {
                        $("[for=b]").text('必填');
                        $("[for=b]").show();
                        return false;
                    }
                    else
                        $("[for=b]").text('');
                    if($("[name=c]").val().trim() == '') {
                        $("[for=c]").text('必填');
                        $("[for=c]").show();
                        return false;
                    }
                    else
                        $("[for=c]").text('');
                    if($("[name=d]").val().trim() == '') {
                        $("[for=d]").text('必填');
                        $("[for=d]").show();
                        return false;
                    }
                    else
                        $("[for=d]").text('');
                    if($("[name=e]").val().trim() == '') {
                        $("[for=e]").text('必填');
                        $("[for=e]").show();
                        return false;
                    }
                    else
                        $("[for=e]").text('');
                    break;
            }
            form.submit();
        }
    };
    var validator1 = $(".type1").validate(rule1);
});
